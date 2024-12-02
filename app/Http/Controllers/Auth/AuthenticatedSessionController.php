<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'user_address' => 'required',
            'password' => 'required',
        ]);

        // Retrieve credentials from the request
        $credentials = $request->only('user_address', 'password');

        // Find the user by their address
        $user = User::where('user_address', $credentials['user_address'])->first();

        if ($user) {
            // Verify the password using Hash::check
            if (Hash::check($credentials['password'], $user->password)) {
                // Log the user in
                Auth::login($user);

                // Regenerate the session to prevent session fixation attacks
                $request->session()->regenerate();

                // Redirect to the intended page or dashboard
                return redirect()->intended(route('dashboard'));
            } else {
                // Log incorrect password attempt
                Log::info('Incorrect password for user', ['user_address' => $credentials['user_address']]);

                // Redirect back to login with an error message
                return redirect('/login')->withErrors(['password' => 'Password is incorrect']);
            }
        }

        // If user not found, return with error
        return redirect('/login')->withErrors(['user_address' => 'User address not found']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
