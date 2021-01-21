<?php

namespace App\Http\Controllers;

use App\Models\Foodcategory;
use Illuminate\Http\Request;

class FoodcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'category_name' => 'required'
        ]);
        Foodcategory::create($request->all());
        return redirect()->route('home')
                        ->with('success','New Category Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Foodcategory $foodcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Foodcategory $foodcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foodcategory $foodcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foodcategory $foodcategory)
    {
        //
    }
}
