<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RadiologyRequisition;

class RadiologyRequisitionController extends Controller
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
        return view('RadiologyRequisition');
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
        'provisional_diagnosis' => 'max:255|required',
        'brain_plain' => 'max:255',
        'ct_pmns' => 'max:255',
        'brain_plain_contrast' => 'max:255',
        'ct_head_face' => 'max:255',
        'ct_face_plain' => 'max:255',
        'ct_3d' => 'max:255',
        'ct_cv_junction_flex' => 'max:255',
        'ct_cv_junction_ext' => 'max:255',
        'ct_chest_plain' => 'max:255',
        'ct_dorsal_spine' => 'max:255',
        'ct_cervical_spine' => 'max:255',
        'ct_abdomen_plain' => 'max:255',
        'ct_lumbar_spine' => 'max:255',
        'other' => 'max:255',
        'anyother' => 'max:255',
        'xray_fixed' => 'max:255',
        'xray_portable' => 'max:255',
        'other_xray' => 'max:255',
        'xray_other' => 'max:255',
        'date' => 'max:255|required',
        'time' => 'max:255|required',
      ]);

      $create = RadiologyRequisition::create(array(
        'provisional_diagnosis'=> $request->provisional_diagnosis,
        'brain_plain'=> $request->brain_plain,
        'ct_pmns'=> $request->ct_pmns,
        'brain_plain_contrast'=> $request->brain_plain_contrast,
        'ct_head_face'=> $request->ct_head_face,
        'ct_face_plain'=> $request->ct_face_plain,
        'ct_3d'=> $request->ct_3d,
        'ct_cv_junction_flex'=> $request->ct_cv_junction_flex,
        'ct_cv_junction_ext'=> $request->ct_cv_junction_ext,
        'ct_chest_plain'=> $request->ct_chest_plain,
        'ct_dorsal_spine'=> $request->ct_dorsal_spine,
        'ct_cervical_spine'=> $request->ct_cervical_spine,
        'ct_abdomen_plain'=> $request->ct_abdomen_plain,
        'ct_lumbar_spine'=> $request->ct_lumbar_spine,
        'other'=> $request->other,
        'anyother'=> $request->anyother,
        'xray_fixed'=> $request->xray_fixed,
        'xray_portable'=> $request->xray_portable,
        'other_xray'=> $request->other_xray,
        'xray_other'=> $request->xray_other,
        'date'=> $request->date,
        'time'=> $request->time,
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
