<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PatientDietRecord;

class PatientDietRecordController extends Controller
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
        return view('\PatientDietRecord');
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
       'dietician_name' => 'max:255|required',
       'date' => 'max:255|required',
       'time' => 'max:255|required',
       'bed_no' => 'max:255|required',
       'uhid_no' => 'max:255|required',
       'patient_name' => 'max:255|required',
       'diagnosis' => 'max:255|required',
       'consultants_name' => 'max:255|required',
       'diet_to_be_given' => 'max:255|required',
       'remarks' => 'max:255|required',
     ]);

     $create = PatientDietRecord::create(array(
       'dietician_name'=> $request->dietician_name,
       'date'=> $request->date,
       'time'=> $request->time,
       'bed_no'=> $request->bed_no,
       'uhid_no'=> $request->uhid_no,
       'patient_name'=> $request->patient_name,
       'diagnosis'=> $request->diagnosis,
       'consultants_name'=> $request->consultants_name,
       'diet_to_be_given'=> $request->diet_to_be_given,
       'remarks'=> $request->remarks,
     ));

     return view('\index');
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
        //
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
        //
    }
}
