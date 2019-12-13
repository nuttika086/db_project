<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetModel;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet = PetModel::latest()->get();
   

        return view('pet.index',compact('pet'));
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
        $pet = new PetModel;

        $request->validate([
            
            'Pet_Name' => 'required',
            'Pet_sex' => 'required',
            
        
        ]);
        $pet->Pet_Name = $request->Pet_Name;
        $pet->Pet_sex = $request->Pet_sex;
        
        $pet->save();

        return redirect()->route('pet.index')
                        ->with('success','pet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = PetModel::find($id);
        return view('pet.show',compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = PetModel::find($id);

        return view("pet.edit",compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = PetModel::find($id);

        $customers->delete();
        return redirect()->route('pet.index')
                        ->with('success','Customer delete successfully.');
    }
}
