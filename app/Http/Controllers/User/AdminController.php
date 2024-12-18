<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // Default pagination page size
        $perPage = $request->get('perPage', 10);
        $sortBy = $request->get('sortBy', 'id');
        $sortOrder = $request->get('sortOrder', 'asc');

        // Sorting rule
        if ($sortBy == 'role') {
            $users = User::select('*')
                ->orderByRaw("FIELD(role, 'superadmin', 'admin', 'reporter', 'contributor') $sortOrder");
        } else {
            $users = User::orderBy($sortBy, $sortOrder);
        }

        // Pagination Rule
        if ($perPage == 'all') {
            $users = $users->get();
        } else {
            $users = $users->paginate($perPage);
        }

        return view('profile.admin.index', compact('users'));
    }

    public function view_create()
    {
        return view('profile.admin.form');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required'
        ], [
            'username.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Email format is invalid.',
            'email.unique' => 'Email already exists.',
            'role.required' => 'The role field is required.',
        ]);

        // dd($data);

        User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => bcrypt($data['email'])
        ]);

        return redirect()->route('profile.admin.index')->with('success', 'User created successfully');
    }

    public function view_update(string $id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            abort(404, 'User not found!');
            return;
        }

        return view('profile.admin.update', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $data = $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email',
            'role' => 'required'
        ], [
            'username.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Email format is invalid.',
            'role.required' => 'The role field is required.',
        ]);

        // Mengecek apakah email berubah, jika berubah maka password direset sesuai dengan email baru
        if ($user->email != $data['email']) {
            $data['password'] = bcrypt($data['email']);
        }

        $user->update($data);

        return redirect()->route('profile.admin.index')->with('success', 'User updated successfully');
    }

    public function view_feedback()
    {
        $feedback = DB::table('feedback')
            ->select('feedback.*', 'users.username')
            ->leftJoin('users', 'feedback.user_id', '=', 'users.id')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('profile.admin.feedback', compact('feedback'));
    }

    public function view_user_report()
    {
        return view('profile.admin.user_report');
    }
    
    public function delete_user($id)
    {
        $user = User::findOrFail($id);

        // Prevent deleting superadmin account
        if ($user->role === 'superadmin') {
            return redirect()->route('profile.admin.index')->with('error', 'You cannot delete a superadmin account.');
        }

        // Prevent deleting your own account
        if ($user->id === Auth::id()) {
            return redirect()->route('profile.admin.index')->with('error', 'You cannot delete your own account.');
        }

        // Prevent admin from deleting other admin or superadmin
        if (Auth::user()->role === 'admin' && ($user->role === 'admin' || $user->role === 'superadmin')) {
            return redirect()->route('profile.admin.index')->with('error', 'You cannot delete another admin or superadmin.');
        }

        $user->delete();
        return redirect()->route('profile.admin.index')->with('success', 'User deleted successfully');
    }

    public function view_update_self(string $id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            abort(404, 'User not found!');
            return;
        }

        return view('profile.admin.update_self', compact('user'));
    }

    public function update_self(Request $request, String $id)
    {
        $user = User::findOrFail($id);

        $data = $request->validate([
            'username' => 'required|string|min:3|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => [
                'nullable',
                'min:6',
                'confirmed',
                'regex:/^(?=.*[A-Z])(?=.*[0-9])/',
            ]
        ], [
            'username.required' => 'The name field is required.',
            'username.min' => 'The name must be at least 3 characters.',
            'username.max' => 'The name may not be greater than 255 characters.',
            'username.unique' => 'The username has already been taken.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Email format is invalid.',
            'email.unique' => 'Email already exists.',
            'password.regex' => 'The password must contain at least one capital letter and one number.',
        ]);

        // Check if password is provided, if not, use the old password
        if (!empty($data['password'])) {
            $user->password = bcrypt($data['password']);
        }

        $user->update([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $user->password
        ]);

        return redirect()->route('profile.show_profile')->with('success', 'User updated successfully');
    }
}
