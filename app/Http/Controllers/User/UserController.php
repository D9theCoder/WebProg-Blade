<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required'
        ]);

        $loginField = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$loginField => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('password'));
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:6',
                'confirmed',
                'regex:/^(?=.*[A-Z])(?=.*[0-9])/',
            ]
        ], [
            'password.regex' => 'The password must contain at least one capital letter and one number.',
        ]);

        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'contributor',
            'profile_photo' => null // Set to null instead of default filename
        ]);

        Auth::login($user);
        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function showProfile()
    {
        return view('profile.account', ['user' => Auth::user()]);
    }

    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        DB::beginTransaction();

        try {
            if ($user->profile_photo) { // Only delete if there's an existing custom photo
                Storage::disk('public')->delete('profile_photos/' . $user->profile_photo);
            }

            $filename = time() . '_' . uniqid() . '.' . $request->profile_photo->extension();
            
            $path = $request->file('profile_photo')->storeAs(
                'profile_photos', 
                $filename, 
                'public'
            );

            if (!$path) {
                throw new \Exception('Failed to store the file.');
            }

            $user->profile_photo = $filename;
            /** @var \App\Models\User $user **/
            $user->save();

            DB::commit();

            return back()->with('success', 'Profile photo updated successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Profile photo update error: ' . $e->getMessage());
            return back()->with('error', 'There was an error updating your profile photo. Please try again.');
        }
    }

    public function resetProfilePhoto()
    {
        $user = Auth::user();

        DB::beginTransaction();

        try {
            if ($user->profile_photo) {
                Storage::disk('public')->delete('profile_photos/' . $user->profile_photo);
            }

            $user->profile_photo = null;
            /** @var \App\Models\User $user **/
            $user->save();

            DB::commit();

            return back()->with('success', 'Profile photo reset to default.');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Profile photo reset error: ' . $e->getMessage());
            return back()->with('error', 'There was an error resetting your profile photo. Please try again.');
        }
    }

    public function showResetForm()
    {
        return view('auth.forget_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return redirect()->back()->with('success', true);
        } else {
            return redirect()->back()->withErrors(['email' => __($status)]);
        }
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.reset_password', ['token' => $token, 'email' => request()->email]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:6',
                'confirmed',
                'regex:/^(?=.*[A-Z])(?=.*[0-9])/',
            ],
        ], [
            'password.regex' => 'The password must contain at least one capital letter and one number.',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Your password has been successfully reset. You can now log in with your new password.');
        } else {
            return back()->withErrors(['email' => [__($status)]]);
        }
    }
}
