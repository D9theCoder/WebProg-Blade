<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    //
    public function index()
    {
        return view('about');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string',
            'message' => 'required|string',
        ], [
            'full_name.required' => 'The name field is required.',
            'message.required' => 'The message field is required.',
        ]);

        // dd($data);
        Feedback::create([
            'full_name' => $data['full_name'],
            'message' => $data['message'],
            'user_id' => Auth::user()->id
        ]);
        
        return redirect()->route('about')->with('success', 'Feedback submitted successfully');
        
    }
}
