<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CultureBiopsyForm;

class CultureBiopsyFormController extends Controller
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
        return view('/CultureBiopsyForm');
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

          'date'=> 'required|max:255',
          'time'=> 'required|max:255',
          'doctors_name'=> 'required|max:255',
          'given_by'=> 'required|max:255',
          'received_by'=> 'required|max:255',
          'ihc'=> 'required|max:255',
          'cytology'=> 'max:255',
          'others'=> 'required|max:255',
          'histopathology'=>'max:255',
          'cytology_01'=> 'max:255',
          'type_of_biopsy'=> 'max:255',
          'specimen_info'=> 'required|max:255',
          'imaging_details'=> 'required|max:255',
          'clinical_details'=> 'required|max:255',
          'send_to'=> 'max:255',
          'consultant_sign'=> 'required|max:255',
          'consultant_name'=> 'required|max:255',
          'date_for_sign'=> 'required|max:255',
          'time_for_sign'=> 'required|max:255',

        ]);

        $create = CultureBiopsyForm::create(array(
          'date' => $request->date,
          'time' => $request->time,
          'doctors_name' => $request->doctors_name,
          'given_by' => $request->given_by,
          'received_by' => $request->received_by,
          'ihc' => $request->ihc,
          'cytology' => $request->cytology,
          'others' => $request->others,
          'histopathology' => $request->histopathology,
          'cytology_01' => $request->cytology_01,
          'type_of_biopsy' => $request->type_of_biopsy,
          'specimen_info' => $request->specimen_info,
          'imaging_details' => $request->imaging_details,
          'clinical_details' => $request->clinical_details,
          'send_to' => $request->send_to,
          'consultant_sign' => $request->consultant_sign,
          'consultant_name' => $request->consultant_name,
          'date_for_sign' => $request->date_for_sign,
          'time_for_sign' => $request->time_for_sign,
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
