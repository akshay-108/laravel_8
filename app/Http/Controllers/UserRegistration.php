<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserRegistration extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'role' => 'required|in:manager,developer'
            ]);
    
            if(is_array($validateData)) {
                $user = User::create([
                    'name' => $validateData['name'],
                    'email' => $validateData['email'],
                    'password' => $validateData['password'],
                    'role' => $validateData['role'],
                ]);
            }
            return redirect('registration')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            return redirect('registration')->with('error', $e->getMessage());
        }
    }
}
