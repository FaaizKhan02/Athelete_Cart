<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Jersey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display admin dashboard
     */
    public function dashboard()
    {
        $productsCount = Product::count();
        $jerseysCount = Jersey::count();
        
        return view('admin.dashboard', compact('productsCount', 'jerseysCount'));
    }

    /**
     * Show admin login form
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    /**
     * Handle admin login request
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');
        
        // First check if user exists and is admin
        $user = \App\Models\User::where('email', $credentials['email'])->first();
        
        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Invalid credentials.');
        }

        if ($user->role !== 'admin') {
            return redirect()->back()
                ->withInput()
                ->with('error', 'You do not have admin access.');
        }

        // Attempt to authenticate
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')
                ->with('success', 'Welcome back, Admin!');
        }

        return redirect()->back()
            ->withInput()
            ->with('error', 'Invalid credentials.');
    }

    /**
     * Handle admin logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('admin.login')
            ->with('success', 'You have been logged out successfully.');
    }
}