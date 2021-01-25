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
        $value=Foodcategory::all();
        return view('category.addcategory', ['data'=>$value]);
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
        return redirect()->route('add-category')
                        ->with('success','New Category Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Foodcategory::findOrFail($id);
        return view('category.editcategory', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request->all()); This is to debug the functions
       $request->validate([
        'category_name' => 'required',
    ]);
    
    // escape the token field while updating the record
    $data['category_name']=$request->category_name;

    Foodcategory::whereId($id)->update($data);
    return redirect()->route('add-category')
    ->with('success','Category Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foodcategory  $foodcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foodcategory $foodcategory, $id)
    {
        $foodcategory->destroy($id);
        return redirect()->route('add-category')
                        ->with('success','Category deleted successfully');
    }
}
