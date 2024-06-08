<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLegoSetRequest;
use App\Models\Lego_set;
use Illuminate\Http\Request;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;

class LegoSetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lego_sets = Lego_set::all();

        return view('lego_set.index', compact('lego_sets'));

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
     * @param StoreLegoSetRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreLegoSetRequest $request)
    {
        $data = $request->all();
        $lego_set = Lego_set::create($data);
        $lego_set->save();

        return redirect('/sets');

    }

    /**
     * Display the specified resource.
     * @param Lego_set $lego_set
     */
    public function show(Lego_set $lego_set)
    {

        return view("lego_set.show", compact('lego_set'));
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
