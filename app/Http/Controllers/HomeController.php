<?php

namespace App\Http\Controllers;

use App\Models\Eatery;
use App\Models\Food;
use App\Models\FoodCategory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eateries = Eatery::all();
        $food_categories = FoodCategory::all();
        $foods = Eatery::join('food', 'eateries.id', 'food.eatery_id')
            ->get();

        return  Inertia::render('Home/Index', [
            'eateries' => $eateries,
            'foods' => $foods,
            'food_categories' => $food_categories
        ]);
    }

    public function foodcategory($id)
    {
        $category_name = FoodCategory::findOrFail($id);
        $category_foods = Food::leftJoin('food_categories', 'food.food_category_id', 'food_categories.id')
            ->where('food.food_category_id', $id)
            ->join('eateries', 'eatery_id', 'eateries.id')
            ->select('food.*', 'food.picture_path as picture_path', 'label', 'price', 'food_categories.name as category_name')
            ->get();
        return  Inertia::render('Home/Category', [
            'category_foods' => $category_foods,
            'category_name' => $category_name->name
        ]);
    }

    public function eatery()
    {
        $eateries = Eatery::all();

        return  Inertia::render('Home/SP', [
            'eateries' => $eateries
        ]);
    }

    public function food()
    {
        $foods = Food::all();

        return  Inertia::render('Home/SP', [
            'foods' => $foods
        ]);
    }

    public function search()
    {
        return  Inertia::render('Home/Search');
    }
}
