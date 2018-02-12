<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CompleteNursingAssessment;

class CompleteNursingAssessmentController extends Controller
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
        return view('/CompleteNursingAssessment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'unit' => 'max:255|required',
          'date' => 'max:255|required',
          'time' => 'max:255|required',
          'idbandno' => 'max:255|required',
          'call_bell' => 'max:255|required',
          'height' => 'max:255|required',
          'weight' => 'max:255|required',
          'allergies' => 'max:255',
          'allergies_other' => 'max:255',
          'history_informant' => 'max:255',
          'history_informant_other' => 'max:255',
          'patient_arrived' => 'max:255',
          'patient_arrived_other' => 'max:255',
          'patient_arrived_from' => 'max:255',
          'patient_arrived_from_other' => 'max:255',
          'temperature' => 'max:255|required',
          'temperature_type' => 'max:255',
          'pulse' => 'max:255|required',
          'rr' => 'max:255|required',
          'blood_pressure' => 'max:255|required',
          'spo2' => 'max:255|required',
          'pain' => 'max:255|required',
          'feeding_usual' => 'max:255',
          'feeding_admission' => 'max:255',
          'bathing_usual' => 'max:255',
          'bathing_admission' => 'max:255',
          'toileting_usual' => 'max:255',
          'toileting_admission' => 'max:255',
          'mobility_usual' => 'max:255',
          'mobility_admission' => 'max:255',
          'dressing_usual' => 'max:255',
          'dressing_admission' => 'max:255',
          'hallucinating' => 'max:255',
          'post_op_condition' => 'max:255',
          'narcotics' => 'max:255',
          'weakness' => 'max:255',
          'drug_or_alcohol_withdrawal' => 'max:255',
          'bowel_bladder' => 'max:255',
          'seizures' => 'max:255',
          'walker' => 'max:255',
          'age_60' => 'max:255',
          'recent_hx_falls' => 'max:255',
          'postural_hypo_tension' => 'max:255',
          'uncooperative' => 'max:255',
          'age_12' => 'max:255',
          'poor_eyesight' => 'max:255',
          'language_barrier' => 'max:255',
          'paralysis_stroke' => 'max:255',
          'new_medications' => 'max:255',
          'poor_hearing' => 'max:255',
          'relative_name' => 'max:255|required',
          'relation' => 'max:255|required',
        ]);

        $create = CompleteNursingAssessment::create(array(

          'unit' => $request->unit,
          'date' => $request->date,
          'time' => $request->time,
          'idbandno' => $request->idbandno,
          'call_bell' => $request->call_bell,
          'height' => $request->height,
          'weight' => $request->weight,
          'allergies' => $request->allergies,
          'allergies_other' => $request->allergies_other,
          'history_informant' => $request->history_informant,
          'history_informant_other' => $request->history_informant_other,
          'patient_arrived' => $request->patient_arrived,
          'patient_arrived_other' => $request->patient_arrived_other,
          'patient_arrived_from' => $request->patient_arrived_from,
          'patient_arrived_from_other' => $request->patient_arrived_from_other,
          'temperature' => $request->temperature,
          'temperature_type' => $request->temperature_type,
          'pulse' => $request->pulse,
          'rr' => $request->rr,
          'blood_pressure' => $request->blood_pressure,
          'spo2' => $request->spo2,
          'pain' => $request->pain,
          'feeding_usual' => $request->feeding_usual,
          'feeding_admission' => $request->feeding_admission,
          'bathing_usual' => $request->bathing_usual,
          'bathing_admission' => $request->bathing_admission,
          'toileting_usual' => $request->toileting_usual,
          'toileting_admission' => $request->toileting_admission,
          'mobility_usual' => $request->mobility_usual,
          'mobility_admission' => $request->mobility_admission,
          'dressing_usual' => $request->dressing_usual,
          'dressing_admission' => $request->dressing_admission,
          'hallucinating' => $request->hallucinating,
          'post_op_condition' => $request->post_op_condition,
          'narcotics' => $request->narcotics,
          'weakness' => $request->weakness,
          'drug_or_alcohol_withdrawal' => $request->drug_or_alcohol_withdrawal,
          'bowel_bladder' => $request->bowel_bladder,
          'seizures' => $request->seizures,
          'walker' => $request->walker,
          'age_60' => $request->age_60,
          'recent_hx_falls' => $request->recent_hx_falls,
          'postural_hypo_tension' => $request->postural_hypo_tension,
          'uncooperative' => $request->uncooperative,
          'age_12' => $request->age_12,
          'poor_eyesight' => $request->poor_eyesight,
          'language_barrier' => $request->language_barrier,
          'paralysis_stroke' => $request->paralysis_stroke,
          'new_medications' => $request->new_medications,
          'poor_hearing' => $request->poor_hearing,
          'relative_name' => $request->relative_name,
          'relation' => $request->relation,
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
