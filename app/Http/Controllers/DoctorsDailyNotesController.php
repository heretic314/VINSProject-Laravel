<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DoctorsDailyNotes;

class DoctorsDailyNotesController extends Controller
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
        return view('/DoctorsDailyNotes');
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
        'name' => 'required|max:255',
        'ipd_no' => 'required|unique:doctorsdailynotes,ipd_no|numeric|max:255',
        'sex' => 'required|max:255',
        'attending_consultant' => 'required|max:255',
        'age' => 'required|digits_between:1,100|max:255',
        'date' => 'required|max:255',
        'c_o_07' => 'required|max:255',
        'oe_pulse_07' => 'required|max:255',
        'bp_07' => 'required|max:255',
        'temp_07' => 'required|max:255',
        'resp_spo2_07' => 'required|max:255',
        'pain_07' => 'required|max:255',
        'c_o_09' => 'required|max:255',
        'oe_pulse_09' => 'required|max:255',
        'bp_09' => 'required|max:255',
        'temp_09' => 'required|max:255',
        'resp_spo2_09' => 'required|max:255',
        'pain_09' => 'required|max:255',
        'c_o_15' => 'required|max:255',
        'oe_pulse_15' => 'required|max:255',
        'bp_15' => 'required|max:255',
        'temp_15' => 'required|max:255',
        'resp_spo2_15' => 'required|max:255',
        'pain_15' => 'required|max:255',
        'c_o_21' => 'required|max:255',
        'oe_pulse_21' => 'required|max:255',
        'bp_21' => 'required|max:255',
        'temp_21' => 'required|max:255',
        'resp_spo2_21' => 'required|max:255',
        'pain_21' => 'required|max:255',
      ]);

      $create = DoctorsDailyNotes::create(array(
        'name' => $request->name,
        'ipd_no' => $request->ipd_no,
        'sex' => $request->sex,
        'attending_consultant' => $request->attending_consultant,
        'age' => $request->age,
        'date' => $request->date,
        'c_o_07' => $request->c_o_07,
        'oe_pulse_07' => $request->oe_pulse_07,
        'bp_07' => $request->bp_07,
        'temp_07' => $request->temp_07,
        'resp_spo2_07' => $request->resp_spo2_07,
        'pain_07' => $request->pain_07,
        'c_o_09' => $request->c_o_09,
        'oe_pulse_09' => $request->oe_pulse_09,
        'bp_09' => $request->bp_09,
        'temp_09' => $request->temp_09,
        'resp_spo2_09' => $request->resp_spo2_09,
        'pain_09' => $request->pain_09,
        'c_o_15' => $request->c_o_15,
        'oe_pulse_15' => $request->oe_pulse_15,
        'bp_15' => $request->bp_15,
        'temp_15' => $request->temp_15,
        'resp_spo2_15' => $request->resp_spo2_15,
        'pain_15' => $request->pain_15,
        'c_o_21' => $request->c_o_21,
        'oe_pulse_21' => $request->oe_pulse_21,
        'bp_21' => $request->bp_21,
        'temp_21' => $request->temp_21,
        'resp_spo2_21' => $request->resp_spo2_21,
        'pain_21' => $request->pain_21,
      ));

      return view('/Index');
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
