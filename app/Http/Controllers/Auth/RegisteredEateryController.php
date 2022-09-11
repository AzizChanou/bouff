<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Eatery;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

class RegisteredEateryController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/RegisterEatery');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:25'],
            'surname' => ['string', 'max:25'],
            'phone' => ['required', 'string', 'min:8', 'max:8', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'address' => ['required', 'string'],
            'label' => ['string', 'min:6', 'max:24', 'required'],
            'ifu' => ['string', 'unique:eateries', 'required'],
            'rccm' => ['string', 'unique:eateries', 'required'],
            'description' => ['string', 'min:50', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'rule' => 'eatery',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        Eatery::create([
            'user_id' => Auth::user()->id,
            'label' => $request->label,
            'ifu' => $request->ifu,
            'rccm' => $request->rccm,
            'description' => $request->description,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
