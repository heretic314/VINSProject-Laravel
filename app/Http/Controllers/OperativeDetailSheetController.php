<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OperativeDetailSheet;

class OperativeDetailSheetController extends Controller
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
        return view('OperativeDetailSheet');
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
        'ot_no' => 'max:255|required',
        'date' => 'max:255|required',
        'wheel_in' => 'max:255|required',
        'wheel_out' => 'max:255|required',
        'anesthesa_induction_time' => 'max:255|required',
        'reversal_time' => 'max:255|required',
        'antibiotic1' => 'max:255|required',
        'antibiotic1_time' => 'max:255|required',
        'antibiotic2' => 'max:255',
        'antibiotic2_time' => 'max:255',
        'surgical_time_from' => 'max:255|required',
        'surgical_time_to' => 'max:255|required',
        'surgery_type' => 'max:255|required',
        'surgeon1' => 'max:255|required',
        'surgeon2' => 'max:255',
        'surgeon3' => 'max:255',
        'anesthetist1' => 'max:255|required',
        'anesthetist2' => 'max:255',
        'anesthetist3' => 'max:255',
        'iitv' => 'max:255',
        'fentanyl' => 'max:255',
        'drill' => 'max:255',
        'sevoflurane_desflurane' => 'max:255',
        'microscope' => 'max:255',
        'endoscope' => 'max:255',
        'cussa' => 'max:255',
        'implants' => 'max:255',
        'vendor' => 'max:255',
        'diagnosis' => 'max:255|required',
        'operation_performed' => 'max:255|required',
        'mediclaim' => 'max:255|required',
        'name_tpa' => 'max:255|required',
        'company_thirdparty' => 'max:255|required',
        'name_party' => 'max:255|required',
        'amount' => 'max:255|required',
        'surgery_only' => 'max:255|required',
        'package_surgical' => 'max:255|required',
        'package_total' => 'max:255|required',
      ]);
      $create = OperativeDetailSheet::create(array(
        'ot_no' => $request->ot_no,
        'date'=> $request->date,
        'wheel_in'=> $request->wheel_in,
        'wheel_out'=> $request->wheel_out,
        'anesthesa_induction_time'=> $request->anesthesa_induction_time,
        'reversal_time'=> $request->reversal_time,
        'antibiotic1'=> $request->antibiotic1,
        'antibiotic1_time'=> $request->antibiotic1_time,
        'antibiotic2'=> $request->antibiotic2,
        'antibiotic2_time'=> $request->antibiotic2_time,
        'surgical_time_from'=> $request->surgical_time_from,
        'surgical_time_to'=> $request->surgical_time_to,
        'surgery_type'=> $request->surgery_type,
        'surgeon1'=> $request->surgeon1,
        'surgeon2'=> $request->surgeon2,
        'surgeon3'=> $request->surgeon3,
        'anesthetist1'=> $request->anesthetist1,
        'anesthetist2'=> $request->anesthetist2,
        'anesthetist3'=> $request->anesthetist3,
        'iitv'=> $request->iitv,
        'fentanyl'=> $request->fentanyl,
        'drill'=> $request->drill,
        'sevoflurane_desflurane'=> $request->sevoflurane_desflurane,
        'microscope'=> $request->microscope,
        'endoscope'=> $request->endoscope,
        'cussa'=> $request->cussa,
        'implants'=> $request->implants,
        'vendor'=> $request->vendor,
        'diagnosis'=> $request->diagnosis,
        'operation_performed'=> $request->operation_performed,
        'mediclaim'=> $request->mediclaim,
        'name_tpa'=> $request->name_tpa,
        'company_thirdparty'=> $request->company_thirdparty,
        'name_party'=> $request->name_party,
        'amount'=> $request->amount,
        'surgery_only'=> $request->surgery_only,
        'package_surgical'=> $request->package_surgical,
        'package_total'=> $request->package_total,
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
