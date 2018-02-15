<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CPRFormat;


class CPRFormatController extends Controller
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
         return view('/CPRFormat');
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
          $data = $request->validate([
            'patient_name' => 'max:255|required',
            'ipd_no' => 'max:255|required',
            'age' => 'max:255|required',
            'sex' => 'max:255|required',
            'date' => 'max:255|required',
            'start_time' => 'max:255|required',
            'bed_no' => 'max:255|required',
            'diagnosis' => 'max:255|required',
            'name_doctor' => 'max:255|required',
            'cpr_team' => 'max:255|required',
            'intubation_time' => 'max:255|required',
            'defib_rhythm_00' => 'max:255|required',
            'defib_rhythm_01' => 'max:255|required',
            'defib_rhythm_02' => 'max:255|required',
            'defib_rhythm_03' => 'max:255|required',
            'defib_rhythm_04' => 'max:255|required',
            'defib_dc_00' => 'max:255|required',
            'defib_dc_01' => 'max:255|required',
            'defib_dc_02' => 'max:255|required',
            'defib_dc_03' => 'max:255|required',
            'defib_dc_04' => 'max:255|required',
            'medication_time_00' => 'max:255',
            'medication_name_01' => 'max:255',
            'medication_time_10' => 'max:255',
            'medication_name_11' => 'max:255',
            'medication_time_20' => 'max:255',
            'medication_name_21' => 'max:255',
            'medication_time_30' => 'max:255',
            'medication_name_31' => 'max:255',
            'medication_time_40' => 'max:255',
            'medication_name_41' => 'max:255',
            'total_time' => 'max:255|required',
            'outcome' => 'max:255|required',
            'doctor_name' => 'max:255|required',
            'remarks' => 'max:255|required',
            'consultant_counseled' => 'max:255|required',
            'relative_name' => 'max:255|required',
            '_00_01' => 'max:255|required',
            '_00_02' => 'max:255|required',
            '_00_03' => 'max:255|required',
            '_00_04' => 'max:255|required',
            '_00_05' => 'max:255|required',
            '_00_06' => 'max:255|required',
            '_00_07' => 'max:255|required',
            '_00_08' => 'max:255|required',
            '_01_01' => 'max:255|required',
            '_01_02' => 'max:255|required',
            '_01_03' => 'max:255|required',
            '_01_04' => 'max:255|required',
            '_01_05' => 'max:255|required',
            '_01_06' => 'max:255|required',
            '_01_07' => 'max:255|required',
            '_01_08' => 'max:255|required',
            '_02_01' => 'max:255|required',
            '_02_02' => 'max:255|required',
            '_02_03' => 'max:255|required',
            '_02_04' => 'max:255|required',
            '_02_05' => 'max:255|required',
            '_02_06' => 'max:255|required',
            '_02_07' => 'max:255|required',
            '_02_08' => 'max:255|required',
            '_03_01' => 'max:255|required',
            '_03_02' => 'max:255|required',
            '_03_03' => 'max:255|required',
            '_03_04' => 'max:255|required',
            '_03_05' => 'max:255|required',
            '_03_06' => 'max:255|required',
            '_03_07' => 'max:255|required',
            '_03_08' => 'max:255|required',
            '_04_01' => 'max:255|required',
            '_04_02' => 'max:255|required',
            '_04_03' => 'max:255|required',
            '_04_04' => 'max:255|required',
            '_04_05' => 'max:255|required',
            '_04_06' => 'max:255|required',
            '_04_07' => 'max:255|required',
            '_04_08' => 'max:255|required',
            '_05_01' => 'max:255|required',
            '_05_02' => 'max:255|required',
            '_05_03' => 'max:255|required',
            '_05_04' => 'max:255|required',
            '_05_05' => 'max:255|required',
            '_05_06' => 'max:255|required',
            '_05_07' => 'max:255|required',
            '_05_08' => 'max:255|required',
            '_06_01' => 'max:255|required',
            '_06_02' => 'max:255|required',
            '_06_03' => 'max:255|required',
            '_06_04' => 'max:255|required',
            '_06_05' => 'max:255|required',
            '_06_06' => 'max:255|required',
            '_06_07' => 'max:255|required',
            '_06_08' => 'max:255|required',
            'initial_time '=> 'max:255|required'
          ]);

          $create = CPRFormat::create(array(


            'patient_name' => $request->patient_name,
            'ipd_no' => $request->ipd_no,
            'age' => $request->age,
            'sex' => $request->sex,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'bed_no' => $request->bed_no,
            'diagnosis' => $request->diagnosis,
            'name_doctor' => $request->name_doctor,
            'cpr_team' => $request->cpr_team,
            'intubation_time' => $request->intubation_time,
            'defib_rhythm_00' => $request->defib_rhythm_00,
            'defib_rhythm_01' => $request->defib_rhythm_01,
            'defib_rhythm_02' => $request->defib_rhythm_02,
            'defib_rhythm_03' => $request->defib_rhythm_03,
            'defib_rhythm_04' => $request->defib_rhythm_04,
            'defib_dc_00' => $request->defib_dc_00,
            'defib_dc_01' => $request->defib_dc_01,
            'defib_dc_02' => $request->defib_dc_02,
            'defib_dc_03' => $request->defib_dc_03,
            'defib_dc_04' => $request->defib_dc_04,
            'medication_time_00' => $request->medication_time_00,
            'medication_name_01' => $request->medication_name_01,
            'medication_time_10' => $request->medication_time_10,
            'medication_name_11' => $request->medication_name_11,
            'medication_time_20' => $request->medication_time_20,
            'medication_name_21' => $request->medication_name_21,
            'medication_time_30' => $request->medication_time_30,
            'medication_name_31' => $request->medication_name_31,
            'medication_time_40' => $request->medication_time_40,
            'medication_name_41' => $request->medication_name_41,
            'total_time' => $request->total_time,
            'outcome' => $request->outcome,
            'doctor_name' => $request->doctor_name,
            'remarks' => $request->remarks,
            'consultant_counseled_' => $request->consultant_counseled,
            'relative_name' => $request->relative_name,
            '_00_01' => $request->_00_01,
            '_00_02' => $request->_00_02,
            '_00_03' => $request->_00_03,
            '_00_04' => $request->_00_04,
            '_00_05' => $request->_00_05,
            '_00_06' => $request->_00_06,
            '_00_07' => $request->_00_07,
            '_00_08' => $request->_00_08,
            '_01_01' => $request->_01_01,
            '_01_02' => $request->_01_02,
            '_01_03' => $request->_01_03,
            '_01_04' => $request->_01_04,
            '_01_05' => $request->_01_05,
            '_01_06' => $request->_01_06,
            '_01_07' => $request->_01_07,
            '_01_08' => $request->_01_08,
            '_02_01' => $request->_02_01,
            '_02_02' => $request->_02_02,
            '_02_03' => $request->_02_03,
            '_02_04' => $request->_02_04,
            '_02_05' => $request->_02_05,
            '_02_06' => $request->_02_06,
            '_02_07' => $request->_02_07,
            '_02_08' => $request->_02_08,
            '_03_01' => $request->_03_01,
            '_03_02' => $request->_03_02,
            '_03_03' => $request->_03_03,
            '_03_04' => $request->_03_04,
            '_03_05' => $request->_03_05,
            '_03_06' => $request->_03_06,
            '_03_07' => $request->_03_07,
            '_03_08' => $request->_03_08,
            '_04_01' => $request->_04_01,
            '_04_02' => $request->_04_02,
            '_04_03' => $request->_04_03,
            '_04_04' => $request->_04_04,
            '_04_05' => $request->_04_05,
            '_04_06' => $request->_04_06,
            '_04_07' => $request->_04_07,
            '_04_08' => $request->_04_08,
            '_05_01' => $request->_05_01,
            '_05_02' => $request->_05_02,
            '_05_03' => $request->_05_03,
            '_05_04' => $request->_05_04,
            '_05_05' => $request->_05_05,
            '_05_06' => $request->_05_06,
            '_05_07' => $request->_05_07,
            '_05_08' => $request->_05_08,
            '_06_01' => $request->_06_01,
            '_06_02' => $request->_06_02,
            '_06_03' => $request->_06_03,
            '_06_04' => $request->_06_04,
            '_06_05' => $request->_06_05,
            '_06_06' => $request->_06_06,
            '_06_07' => $request->_06_07,
            '_06_08' => $request->_06_08,
            'initial_time '=> $request->initial_time

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
