<?php

namespace App\Http\Controllers;

use App\Models\Eatery;
use App\Models\Food;
use App\Models\FoodCategory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
        //$foods = Food::all();
        $food_categories = FoodCategory::all();

        $foods = Eatery::join('food', 'eateries.id', 'food.eatery_id')
            ->get();

        return  Inertia::render('Home/Index', [
            'eateries' => $eateries,
            'foods' => $foods,
            'food_categories' => $food_categories
        ]);
    }

    public function foodcategory()
    {
        $food_categories = FoodCategory::all();

        return  Inertia::render('Home/SP', [
            'food_categories' => $food_categories
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
    }
}
