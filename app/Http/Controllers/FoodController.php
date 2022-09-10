<?php

namespace App\Http\Controllers;

use App\Models\Eatery;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eatery = Auth::user()->eatery;
        $foods = $eatery->foods;
        return Inertia::render('Food/Index', [
            'eatery' => $eatery,
            'foods' => $foods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eatery = Auth::user()->eatery;
        $food_categories = FoodCategory::all();
        return Inertia::render('Food/Create', [
            'eatery' => $eatery,
            'food_categories' => $food_categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:30'],
            'price' => ['required', 'min:3', 'max:12'],
            'description' => ['max:255'],
            'category' => ['required'],
            'picture' => ['required', 'mimes:jpeg,jpg,png', 'max:2048'],
        ]);

        // $picture_path = "/storage" . '/' . $request->file('picture')->storeAs('food_picture', $picture_name, 'public');
        $picture_name = Auth::user()->eatery->id . '_' . $request->name . '.' . $request->file('picture')->extension();
        $picture_path = $request->file('picture')->storeAs('food_picture', $picture_name, 'google');

        Food::create([
            'status' => true,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'eatery_id' => Auth::user()->eatery->id,
            'food_category_id' => $request->category,
            'picture_path' => Storage::url($picture_path),
        ]);

        return redirect()->route('food.index')->with('success', 'Bouff cree avec succees !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::findOrFail($id);
        $food_categories = FoodCategory::all();
        return Inertia::render('Food/Edit', [
            'food' => $food,
            'food_categories' => $food_categories,
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
        $food = Food::findOrFail($id);
        $request->validate([
            'name' => ['string', 'min:6', 'max:24'],
            'status' => ['boolean'],
            // 'picture' => ['sometimes', 'mimes:jpeg,jpg,png', 'max:2048'],
            'price' => ['min:3', 'max:12'],
            'description' => ['string'],
        ]);

        if ($request->hasFile('picture')) {
            $picture_name = Auth::user()->eatery->id . '_' . $request->name . '.' . $request->file('picture')->extension();
            $picture_path = $request->file('picture')->storeAs('food_picture', $picture_name, 'google');
            $food->picture_path = Storage::url($picture_path);
        }

        $food->name = $request->name;
        $food->price = $request->price;
        $food->description = $request->description;
        $food->food_category_id = $request->category_id;
        $food->save();

        return redirect()->route('food.index')->with('success', 'Bouff mise a jour avec succees !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Food::destroy($id);
        return redirect()->route('food.index')->with('success', 'Bouff supprimee avec succees !');
    }
}
