<?php

namespace App\Http\Controllers;

use App\Models\Eatery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;


class EateryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eatery = Auth::user()->eatery;
        return Inertia::render('Eatery/Index', [
            'eatery' => $eatery
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stats()
    {
        $eatery = Auth::user()->eatery;

        return Inertia::render('Eatery/Stats', [
            'eatery' => $eatery
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eatery = Eatery::findOrFail($id);
        $foods = $eatery->foods;
        return Inertia::render('Eatery/Show', [
            'eatery' => $eatery,
            'foods' => $foods
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
        $eatery = Eatery::join('users', 'users.id', 'eateries.user_id')->find($id);
        return Inertia::render('Eatery/Edit', [
            'eatery' => $eatery
        ]);
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
        $eatery = Eatery::findOrFail($id);

        $request->validate([
            'name' => ['string', 'min:6', 'max:24'],
            'number' => ['string'],
            'ifu' => ['string'],
            'rccm' => ['string'],
            'picture_path' => ['string'],
            'open_hour' => ['string'],
            'closed_hour' => ['string'],
            'cooking_time' => ['string'],
            'description' => ['string', 'min:50', 'max:1024'],
            'picture_path' => ['string'],
        ]);

        $picture_name = Auth::user()->eatery->id . '_' . $request->name . '.' . $request->file('picture')->extension();
        $picture_path = "/storage" . '/' . $request->file('picture')->storeAs('food_picture', $picture_name, 'public');

        $eatery->update([
            'name' => $request['name'],
            'number' => $request['number'],
            'ifu' => $request['ifu'],
            'rccm' => $request['rccm'],
            'picture_path' => $request['picture_path'],
            'open_hour' => $request['open_hour'],
            'closed_hour' => $request['closed_hour'],
            'cooking_time' => $request['cooking_time'],
            'description' => $request['description'],
            'picture_path' => $picture_path,
        ])->save();

        return redirect()->route('eatery.show')->with('success', 'Information.s mise.s a jour avec succees !');
    }
}
