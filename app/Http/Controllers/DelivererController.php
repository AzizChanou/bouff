<?php

namespace App\Http\Controllers;

use App\Models\Deliverer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DelivererController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliverer = Deliverer::join('users', 'users.id', 'deliverers.user_id')->find(Auth::user()->deliverer->id);
        return Inertia::render('User/Index', [
            'user' => $deliverer,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deliverer  $deliverer
     * @return \Illuminate\Http\Response
     */
    public function show(Deliverer $deliverer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deliverer  $deliverer
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverer $deliverer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deliverer  $deliverer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverer $deliverer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deliverer  $deliverer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverer $deliverer)
    {
        //
    }
}
