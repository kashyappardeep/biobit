<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'team_position' => ['required'],
            'referal_by' => ['required'],

            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if (!empty($request->referal_by)) {
            $referalUser = User::where('id', $request->referal_by)->first();

            if (is_null($referalUser)) {
                return redirect()->back()->withErrors(['referal_by' => 'Referral code is invalid.']);
            }
        }


        // dd('testing');
        $lastnode = $this->findVacantNode($request->referal_by);
        // $result = User::findVacantNode($request->referal_by);
        // dd($lastnode);


        $user = User::create([
            'name' => $request->name,
            'team_position' => $lastnode['team_position'],
            'email' => $request->email,
            'referal_code' => "BBC" . random_int(100000, 999999),
            'referal_by' => $request->referal_by,
            'binary_processed' => 0,
            'under_user_id' => $lastnode['under_user_id'],
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }


    public function findVacantNode($sponsorId)
    {
        try {
            $vacantNode = User::findFirstVacantNode($sponsorId);

            return ([
                'under_user_id' => $vacantNode['under_user_id'],
                'team_position' => $vacantNode['team_position'] === 1 ? '1' : '2',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
