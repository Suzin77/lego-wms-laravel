<?php

namespace App\Http\Controllers;

use App\Models\Lego_set;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LegoSetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Lego_set::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lego_set.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param Lego_set $lego_set
     */
    public function show(Lego_set $lego_set)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lego_set $lego_set)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lego_set $lego_set)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lego_set $lego_set)
    {
        //
    }
}
