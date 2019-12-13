<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaregiverModel;
class CaregiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caregiver = CaregiverModel::latest()->get();
   

        return view('caregiver.index',compact('caregiver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caregiver = CaregiverModel::all();
        return view('caregiver.create',compact('caregiver'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caregiver = new CaregiverModel;

        $request->validate([
          
          'Caregiver_FirsName' => 'required',
          'CareGiver_LastName' => 'required',
          'CareGiver_Phone'=>'required',
          
        ]);
        
        $caregiver->Caregiver_FirsName = $request->Caregiver_FirsName;
        $caregiver->CareGiver_LastName = $request->CareGiver_LastName;
        $caregiver->CareGiver_Phone = $request->CareGiver_GiverPhone;
        
        $caregiver->save();

        return redirect()->route('caregiver.index')
                        ->with('success','caregiver created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caregiver = CaregiverModel::find($id);
        return view('caregiver.edit',compact('caregiver'));
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
        $caregiver = CaregiverMdel::find($id);

        $caregiver->validate([
            'Caregiver_FirsName' => 'required',
            'CareGiver_LastName' => 'required',
            'CareGiver_Phone'=>'required',
          ]);
        $caregiver->Caregiver_FirsName = $request->Caregiver_FirsName;
        $caregiver->CareGiver_LastName = $request->CareGiver_LastName;
        $caregiver->CareGiver_Phone = $request->CareGiver_Phone;
        $caregiver->update();

        return redirect()->route('caregiver.index')
                        ->with('success','caregiver update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caregiver = CaregiverModel::find($id);

        $caregiver->delete();
        return redirect()->route('caregiver.index')
                        ->with('success','caregiver delete successfully.');
    }
}
