<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DoctorsInitialAssessment;

class DoctorsInitialAssessmentController extends Controller
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
        return view('/DoctorsInitialAssessment');
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
          'history' => 'required|max:255',
          'past_history' => 'required|max:255',
          'allergic_history' => 'required|max:255',
          'name_informant' => 'required|max:255',
          'brought_by' => 'required|max:255',
          'place_of_accident' => 'required|max:255',
          'current_time' => 'required|max:255',
          'current_date' => 'required|max:255',
          'mlc' => 'required|max:255',
          'loc' => 'required|max:255',
          'ent_bleeding' => 'required|max:255',
          'seizures' => 'required|max:255',
          'vomiting' => 'required|max:255',
          'pulse' => 'required|max:255',
          'temp' => 'required|max:255',
          'bp' => 'required|max:255',
          'spo2' => 'required|max:255',
          'rbs' => 'required|max:255',
          'pain' => 'required|max:255',
          'gcs_e' => 'required|max:255',
          'gcs_m' => 'required|max:255',
          'gcs_v' => 'required|max:255',
          'systematic_examination' => 'required|max:255',
          'any_other' => 'required|max:255',
          'treated_on_admission' => 'required|max:255',
          'shifted_to' => 'required|max:255',
      ]);

      $create = DoctorsInitialAssessment::create(array(
        'history' => $request->history,
        'past_history' => $request->past_history,
        'allergic_history' => $request->allergic_history,
        'name_informant' => $request->name_informant,
        'brought_by' => $request->brought_by,
        'place_of_accident' => $request->place_of_accident,
        'current_time' => $request->current_time,
        'current_date' => $request->current_date,
        'mlc' => $request->mlc,
        'loc' => $request->loc,
        'ent_bleeding' => $request->ent_bleeding,
        'seizures' => $request->seizures,
        'vomiting' => $request->vomiting,
        'pulse' => $request->pulse,
        'temp' => $request->temp,
        'bp' => $request->bp,
        'spo2' => $request->spo2,
        'rbs' => $request->rbs,
        'pain' => $request->pain,
        'gcs_e' => $request->gcs_e,
        'gcs_m' => $request->gcs_m,
        'gcs_v' => $request->gcs_v,
        'systematic_examination' => $request->systematic_examination,
        'any_other' => $request->any_other,
        'treated_on_admission' => $request->treated_on_admission,
        'shifted_to' => $request->shifted_to,
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
