<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Pantry;
use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PantryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pantries = Pantry::get();
        $item = Item::orderBy('created_at','ASC')->get();
        //ADDING THIS HERE FOR LATER IF I WANT TO USE IT
        //$item = Item::orderBy('created_at','ASC')->paginate(1);
        return view('dashboard', [
            'pantries' => $pantries,
            'items' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pantry.create');
//        $pantries = Pantry::get();
//        $item = Item::orderBy('created_at','ASC')->get();
//        //ADDING THIS HERE FOR LATER IF I WANT TO USE IT
//        //$item = Item::orderBy('created_at','ASC')->paginate(1);
//        return view('pantry', [
//            'pantries' => $pantries,
//            'items' => $item]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
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
