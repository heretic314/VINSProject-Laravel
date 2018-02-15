<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\InfusionTherapyChart;

class InfusionTherapyChartController extends Controller
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
        return view('InfusionTherapyChart');
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
         'patient_name' => 'max:255|required',
         'ipd_no' => 'max:255|required',
         'age' => 'max:255|required',
         'sex' => 'max:255|required',
         'attending_consultant' => 'max:255|required',
         'date_01' => 'max:255|required',
         'name_str_01' => 'max:255|required',
         'volume_01' => 'max:255|required',
         'additions_01' => 'max:255|required',
         'rate_01' => 'max:255|required',
         'timestart_01' => 'max:255|required',
         'timeend_01' => 'max:255|required',
         'date_02' => 'max:255',
         'name_str_02' => 'max:255',
         'volume_02' => 'max:255',
         'additions_02' => 'max:255',
         'rate_02' => 'max:255',
         'timestart_02' => 'max:255',
         'timeend_02' => 'max:255',
         'date_03' => 'max:255',
         'name_str_03' => 'max:255',
         'volume_03' => 'max:255',
         'additions_03' => 'max:255',
         'rate_03' => 'max:255',
         'timestart_03' => 'max:255',
         'timeend_03' => 'max:255',
         'date_04' => 'max:255',
         'name_str_04' => 'max:255',
         'volume_04' => 'max:255',
         'additions_04' => 'max:255',
         'rate_04' => 'max:255',
         'timestart_04' => 'max:255',
         'timeend_04' => 'max:255',
         'date_05' => 'max:255',
         'name_str_05' => 'max:255',
         'volume_05' => 'max:255',
         'additions_05' => 'max:255',
         'rate_05' => 'max:255',
         'timestart_05' => 'max:255',
         'timeend_05' => 'max:255',
         'date_06' => 'max:255',
         'name_str_06' => 'max:255',
         'volume_06' => 'max:255',
         'additions_06' => 'max:255',
         'rate_06' => 'max:255',
         'timestart_06' => 'max:255',
         'timeend_06' => 'max:255'
     ]);

     $crate = InfusionTherapyChart::create(array(
       'patient_name'=> $request->patient_name,
       'ipd_no'=> $request->ipd_no,
       'age'=> $request->age,
       'sex'=> $request->sex,
       'attending_consultant'=> $request->attending_consultant,
       'date_01'=> $request->date_01,
       'name_str_01'=> $request->name_str_01,
       'volume_01'=> $request->volume_01,
       'additions_01'=> $request->additions_01,
       'rate_01'=> $request->rate_01,
       'timestart_01'=> $request->timestart_01,
       'timeend_01'=> $request->timeend_01,
       'date_02'=> $request->date_02,
       'name_str_02'=> $request->name_str_02,
       'volume_02'=> $request->volume_02,
       'additions_02'=> $request->additions_02,
       'rate_02'=> $request->rate_02,
       'timestart_02'=> $request->timestart_02,
       'timeend_02'=> $request->timeend_02,
       'date_03'=> $request->date_03,
       'name_str_03'=> $request->name_str_03,
       'volume_03'=> $request->volume_03,
       'additions_03'=> $request->additions_03,
       'rate_03'=> $request->rate_03,
       'timestart_03'=> $request->timestart_03,
       'timeend_03'=> $request->timeend_03,
       'date_04'=> $request->date_04,
       'name_str_04'=> $request->name_str_04,
       'volume_04'=> $request->volume_04,
       'additions_04'=> $request->additions_04,
       'rate_04'=> $request->rate_04,
       'timestart_04'=> $request->timestart_04,
       'timeend_04'=> $request->timeend_04,
       'date_05'=> $request->date_05,
       'name_str_05'=> $request->name_str_05,
       'volume_05'=> $request->volume_05,
       'additions_05'=> $request->additions_05,
       'rate_05'=> $request->rate_05,
       'timestart_05'=> $request->timestart_05,
       'timeend_05'=> $request->timeend_05,
       'date_06'=> $request->date_06,
       'name_str_06'=> $request->name_str_06,
       'volume_06'=> $request->volume_06,
       'additions_06'=> $request->additions_06,
       'rate_06'=> $request->rate_06,
       'timestart_06'=> $request->timestart_06,
       'timeend_06'=> $request->timeend_06,
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
