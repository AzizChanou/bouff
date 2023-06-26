<?php

namespace App\Http\Controllers;

use App\Models\Eatery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
        $user = User::findOrFail($id);
        $eatery = $user->eatery;
        $request->validate([
            'ifu' => ['string'],
            'label' => ['string'],
            'rccm' => ['string'],
            'description' => ['string'],
            //'picture' => ['sometimes', 'mimes:jpeg,jpg,png', 'max:2048'],
        ]);

        if ($request->hasFile('picture')) {
            $eatery = Auth::user()->eatery;

            $picture = $request->file('picture');
            $picture_extension = $picture->extension();

            $picture_name = $eatery->id . '_' . $request->input('label') . '.' . $picture_extension;
            $picture_path = $picture->storeAs('eatery', $picture_name, 'public');

            $eatery->picture_path = asset('storage/' . $picture_path);
        }


        $eatery->label = $request['label'];
        $eatery->ifu = $request['ifu'];
        $eatery->rccm = $request['rccm'];
        $eatery->open_hour = $request['open_hour'];
        $eatery->closed_hour = $request['closed_hour'];
        $eatery->cookingtime = $request['cooking_time'];
        $eatery->description = $request['description'];
        $eatery->save();

        return redirect()->route('eatery.index')->with('success', 'Information.s mise.s a jour avec succees !');
    }
}
