<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('backend.register', [
            'title' => 'Registrasi'
        ]);
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3',
        ]);

        User::create($validated);

        $request->session()->flash('success', 'Registration successful!');

        return redirect('/login');
    }
}
