<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return Inertia::render('User/Index', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->id == $id) {
            $user = User::findOrFail($id);
            return Inertia::render('User/Edit', [
                'user' => $user
            ]);
        } else {
            return abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->id == $id) {
            $user = User::findOrFail($id);

            $request->validate([
                'name' => ['required', 'string', 'max:25'],
                'surname' => ['string', 'max:25'],
                'phone' => ['required', 'string', 'min:8', 'max:8'],
                'email' => ['email'],
                'address' => ['string', 'max:50'],
            ]);

            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
            ]);

            return Inertia::render('User/Index', [
                'user' => $user
            ]);
        } else {
            return abort(403);
        }
    }
}
