<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ERObservation;

class ERObservationController extends Controller
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
      return view('/ERObservation');
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
        'date' => 'max:255|required',
        'triage_category' => 'max:255|required',
        'diagnosis' => 'max:255|required',
        'investigation' => 'max:255|required',
        'time_01' => 'max:255|required',
        'time_02' => 'max:255|required',
        'time_03' => 'max:255|required',
        'pulse_01' => 'max:255|required',
        'pulse_02' => 'max:255|required',
        'pulse_03' => 'max:255|required',
        'bp_01' => 'max:255|required',
        'bp_02' => 'max:255|required',
        'bp_03' => 'max:255|required',
        'spo2_01' => 'max:255|required',
        'spo2_02' => 'max:255|required',
        'spo2_03' => 'max:255|required',
        'rr_01' => 'max:255|required',
        'rr_02' => 'max:255|required',
        'rr_03' => 'max:255|required',
        'gcs_01' => 'max:255|required',
        'gcs_02' => 'max:255|required',
        'gcs_03' => 'max:255|required',
        'temp_01' => 'max:255|required',
        'temp_02' => 'max:255|required',
        'temp_03' => 'max:255|required',
        'iv_infusion_01' => 'max:255|required',
        'qty_01' => 'max:255|required',
        'time_start_01' => 'max:255|required',
        'time_end_01' => 'max:255|required',
        'remarks_01' => 'max:255',
        'iv_infusion_02' => 'max:255',
        'qty_02' => 'max:255',
        'time_start_02' => 'max:255',
        'time_end_02' => 'max:255',
        'remarks_02' => 'max:255',
        'iv_infusion_03' => 'max:255',
        'qty_03' => 'max:255',
        'time_start_03' => 'max:255',
        'time_end_03' => 'max:255',
        'remarks_03' => 'max:255',
        'iv_infusion_04' => 'max:255',
        'qty_04' => 'max:255',
        'time_start_04' => 'max:255',
        'time_end_04' => 'max:255',
        'remarks_04' => 'max:255',
        'name_drug_01' => 'max:255|required',
        'dosage_01' => 'max:255|required',
        'routine_01' => 'max:255|required',
        'administration_by_01' => 'max:255|required',
        'medication_time_01' => 'max:255|required',
        'name_drug_02' => 'max:255',
        'dosage_02' => 'max:255',
        'routine_02' => 'max:255',
        'administration_by_02' => 'max:255',
        'medication_time_02' => 'max:255',
        'name_drug_03' => 'max:255',
        'dosage_03' => 'max:255',
        'routine_03' => 'max:255',
        'administration_by_03' => 'max:255',
        'medication_time_03' => 'max:255',
        'name_drug_04' => 'max:255',
        'dosage_04' => 'max:255',
        'routine_04' => 'max:255',
        'administration_by_04' => 'max:255',
        'medication_time_04' => 'max:255',
        'name_drug_05' => 'max:255',
        'dosage_05' => 'max:255',
        'routine_05' => 'max:255',
        'administration_by_05' => 'max:255',
        'medication_time_05' => 'max:255',
        'patient_shifted_to' => 'max:255|required',
        'er_nurse' => 'max:255|required',
      ]);

      $create = ERObservation::create(array(
        'date' => $request->date,
        'triage_category' => $request->triage_category,
        'diagnosis' => $request->diagnosis,
        'investigation' => $request->investigation,
        'time_01' => $request->time_01,
        'time_02' => $request->time_02,
        'time_03' => $request->time_03,
        'pulse_01' => $request->pulse_01,
        'pulse_02' => $request->pulse_02,
        'pulse_03' => $request->pulse_03,
        'bp_01' => $request->bp_01,
        'bp_02' => $request->bp_02,
        'bp_03' => $request->bp_03,
        'spo2_01' => $request->spo2_01,
        'spo2_02' => $request->spo2_02,
        'spo2_03' => $request->spo2_03,
        'rr_01' => $request->rr_01,
        'rr_02' => $request->rr_02,
        'rr_03' => $request->rr_03,
        'gcs_01' => $request->gcs_01,
        'gcs_02' => $request->gcs_02,
        'gcs_03' => $request->gcs_03,
        'temp_01' => $request->temp_01,
        'temp_02' => $request->temp_02,
        'temp_03' => $request->temp_03,
        'iv_infusion_01' => $request->iv_infusion_01,
        'qty_01' => $request->qty_01,
        'time_start_01' => $request->time_start_01,
        'time_end_01' => $request->time_end_01,
        'remarks_01' => $request->remarks_01,
        'iv_infusion_02' => $request->iv_infusion_02,
        'qty_02' => $request->qty_02,
        'time_start_02' => $request->time_start_02,
        'time_end_02' => $request->time_end_02,
        'remarks_02' => $request->remarks_02,
        'iv_infusion_03' => $request->iv_infusion_03,
        'qty_03' => $request->qty_03,
        'time_start_03' => $request->time_start_03,
        'time_end_03' => $request->time_end_03,
        'remarks_03' => $request->remarks_03,
        'iv_infusion_04' => $request->iv_infusion_04,
        'qty_04' => $request->qty_04,
        'time_start_04' => $request->time_start_04,
        'time_end_04' => $request->time_end_04,
        'remarks_04' => $request->remarks_04,
        'name_drug_01' => $request->name_drug_01,
        'dosage_01' => $request->dosage_01,
        'routine_01' => $request->routine_01,
        'administration_by_01' => $request->administration_by_01,
        'medication_time_01' => $request->medication_time_01,
        'name_drug_02' => $request->name_drug_02,
        'dosage_02' => $request->dosage_02,
        'routine_02' => $request->routine_02,
        'administration_by_02' => $request->administration_by_02,
        'medication_time_02' => $request->medication_time_02,
        'name_drug_03' => $request->name_drug_03,
        'dosage_03' => $request->dosage_03,
        'routine_03' => $request->routine_03,
        'administration_by_03' => $request->administration_by_03,
        'medication_time_03' => $request->medication_time_03,
        'name_drug_04' => $request->name_drug_04,
        'dosage_04' => $request->dosage_04,
        'routine_04' => $request->routine_04,
        'administration_by_04' => $request->administration_by_04,
        'medication_time_04' => $request->medication_time_04,
        'name_drug_05' => $request->name_drug_05,
        'dosage_05' => $request->dosage_05,
        'routine_05' => $request->routine_05,
        'administration_by_05' => $request->administration_by_05,
        'medication_time_05' => $request->medication_time_05,
        'patient_shifted_to' => $request->patient_shifted_to,
        'er_nurse' => $request->er_nurse,
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
