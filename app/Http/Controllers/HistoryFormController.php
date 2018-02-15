<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HistoryForm;

class HistoryFormController extends Controller
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
        return view('HistoryForm');

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
         'chief_complaints' => 'max:255|required',
         'patient_history' => 'max:255|required',
         'past_history' => 'max:255|required',
         'allergic_history' => 'max:255|required',
         'road_accident' => 'max:255|required',
         'alleged_roadtrafficaccident' => 'max:255|required',
         'place' => 'max:255|required',
         'time' => 'max:255|required',
         'date' => 'max:255|required',
         'ho_loc' => 'max:255|required',
         'ho_entbleeding' => 'max:255|required',
         'ho_seizures' => 'max:255|required',
         'ho_vomiting' => 'max:255|required',
         'pulse' => 'max:255|required',
         'bp' => 'max:255|required',
         'temp' => 'max:255|required',
         'resp' => 'max:255|required',
         'pain' => 'max:255|required',
         'right_biceps' => 'max:255|required',
         'right_triceps' => 'max:255|required',
         'right_supinator' => 'max:255|required',
         'right_knee' => 'max:255|required',
         'right_ankle' => 'max:255|required',
         'right_hoffmann' => 'max:255|required',
         'right_ff' => 'max:255|required',
         'left_biceps' => 'max:255|required',
         'left_triceps' => 'max:255|required',
         'left_supinator' => 'max:255|required',
         'left_knee' => 'max:255|required',
         'left_ankle' => 'max:255|required',
         'left_hoffmann' => 'max:255|required',
         'left_ff' => 'max:255|required',
         'plantars' => 'max:255|required',
         'romberg' => 'max:255|required',
         'gait' => 'max:255|required',
         'cerebellar' => 'max:255|required',
         'neck_stiffness' => 'max:255|required',
         'diagnosis' => 'max:255|required',
       ]);
       $create = HistoryForm::create(array(
         'chief_complaints'  => $request->chief_complaints,
         'patient_history'  => $request->patient_history,
         'past_history'  => $request->past_history,
         'allergic_history'  => $request->allergic_history,
         'road_accident'  => $request->road_accident,
         'alleged_roadtrafficaccident'  => $request->alleged_roadtrafficaccident,
         'place' => $request->place,
         'time' => $request->time,
         'date' => $request->date,
         'ho_loc' => $request->ho_loc,
         'ho_entbleeding' => $request->ho_entbleeding,
         'ho_seizures' => $request->ho_seizures,
         'ho_vomiting' => $request->ho_vomiting,
         'pulse' => $request->pulse,
         'bp' => $request->bp,
         'temp' => $request->temp,
         'resp' => $request->resp,
         'pain' => $request->pain,
         'right_biceps' => $request->right_biceps,
         'right_triceps' => $request->right_triceps,
         'right_supinator' => $request->right_supinator,
         'right_knee' => $request->right_knee,
         'right_ankle' => $request->right_ankle,
         'right_hoffmann' => $request->right_hoffmann,
         'right_ff' => $request->right_ff,
         'left_biceps' => $request->left_biceps,
         'left_triceps' => $request->left_triceps,
         'left_supinator' => $request->left_supinator,
         'left_knee' => $request->left_knee,
         'left_ankle' => $request->left_ankle,
         'left_hoffmann' => $request->left_hoffmann,
         'left_ff' => $request->left_ff,
         'plantars' => $request->plantars,
         'romberg' => $request->romberg,
         'gait' => $request->gait,
         'cerebellar' => $request->cerebellar,
         'neck_stiffness' => $request->neck_stiffness,
         'diagnosis' => $request->diagnosis,

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
