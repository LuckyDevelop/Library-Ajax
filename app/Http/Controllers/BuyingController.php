<?php

namespace App\Http\Controllers;

use App\Models\buying;
use Illuminate\Http\Request;

class BuyingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buying.data');
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
     * @param  \App\Models\buying  $buying
     * @return \Illuminate\Http\Response
     */
    public function show(buying $buying)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buying  $buying
     * @return \Illuminate\Http\Response
     */
    public function edit(buying $buying)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buying  $buying
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buying $buying)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buying  $buying
     * @return \Illuminate\Http\Response
     */
    public function destroy(buying $buying)
    {
        //
    }
}
