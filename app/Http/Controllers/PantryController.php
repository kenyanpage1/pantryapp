<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Pantry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PantryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pantry = Pantry::get();
        $item = Item::get();
        return view('dashboard', [
            'pantries' => $pantry,
            'items' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pantry $pantry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pantry $pantry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pantry $pantry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pantry $pantry)
    {
        //
    }
}
