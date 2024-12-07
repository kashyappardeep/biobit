<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\InvestmentHistory;
use App\Models\TransactionHistory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('Admin.Login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Define credentials
        $credentials = $request->only('email', 'password');

        // Check if the user exists
        $user = Admin::where('email', $credentials['email'])->first();

        if ($user) {
            // Check if the entered password matches the hashed password
            if (Hash::check($request->password, $user->password)) {
                // Login the admin user with the 'admin' guard
                Auth::guard('admin')->login($user);

                // Redirect to admin dashboard
                return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully');
            } else {
                Log::info('Incorrect password for Admin', ['email' => $credentials['email']]);
                return redirect()->route('login')->with('error', 'Password is incorrect');
            }
        }

        // If the user is not found
        Log::info('Admin not found', ['email' => $credentials['email']]);
        return redirect()->route('login')->with('error', 'Login credentials are not valid');
    }
    public function dashboard()
    {
        $user = User::count();
        $active_user = User::where('activation', 1)->count();
        $total_invest = InvestmentHistory::sum('amount');
        $total_withdrow = TransactionHistory::sum('amount');

        // dd('admin');
        return view('Admin.Dashboard', compact('active_user', 'total_withdrow', 'total_invest', 'user'));
    }
    public function user_list()
    {
        $user = User::with('referrals')->get();
        // dd($user);
        return view('Admin.userlist', compact('user'));
    }
}
