<?php

namespace App\Http\Controllers;

use App\Models\Fooditem;
use App\Models\Foodcategory;
use Illuminate\Http\Request;

class FooditemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Foodcategory::all();
        $item= Fooditem::all();
        return view('item.addfooditem', ['items'=>$item, 'datas'=>$data]);
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
        // dd($request->all()); 
       $request->validate([
        'item_name' => 'required',
        'price' => 'required',
        'foodcategory_id' => 'required',
    ]);
    Fooditem::create($request->all());
    return redirect()->route('add-food-item')
                    ->with('success','New Food Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fooditem  $fooditem
     * @return \Illuminate\Http\Response
     */
    public function show(Fooditem $fooditem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fooditem  $fooditem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Foodcategory::all();
        $details = Fooditem::findOrFail($id);
        return view('item.editfooditem', ['val'=>$item, 'details'=>$details]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fooditem  $fooditem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fooditem $fooditem, $id)
    {
         // dd($request->all()); This is to debug the functions
         $request->validate([
            'item_name' => 'required',
            'price' => 'required',
            'foodcategory_id' => 'required',
        ]);
    
    // escape the token field while updating the record
    $data['item_name']=$request->item_name;
    $data['price']=$request->price;
    $data['foodcategory_id']=$request->foodcategory_id;

    Fooditem::whereId($id)->update($data);
    return redirect()->route('add-food-item')
    ->with('success','Food Item Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fooditem  $fooditem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fooditem $fooditem, $id)
    {
        $fooditem->destroy($id);
        return redirect()->route('add-food-item')
                        ->with('success','Food deleted successfully');
    }
}
