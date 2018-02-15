<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LabSheet;

class LabSheetController extends Controller
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
        return view('LabSheet');
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
            'room_no' => 'max:255',
            'date' => 'max:255',
            'date_01' => 'max:255',
            'date_02' => 'max:255',
            'date_03' => 'max:255',
            'date_04' => 'max:255',
            'date_05' => 'max:255',
            'date_06' => 'max:255',
            'date_07' => 'max:255',
            'name_01' => 'max:255',
            'name_02' => 'max:255',
            'name_03' => 'max:255',
            'name_04' => 'max:255',
            'name_05' => 'max:255',
            'name_06' => 'max:255',
            'name_07' => 'max:255',
            'investigation_01' => 'max:255',
            'investigation_02' => 'max:255',
            'investigation_03' => 'max:255',
            'investigation_04' => 'max:255',
            'investigation_05' => 'max:255',
            'investigation_06' => 'max:255',
            'investigation_07' => 'max:255',
            'remark_01' => 'max:255',
            'remark_02' => 'max:255',
            'remark_03' => 'max:255',
            'remark_04' => 'max:255',
            'remark_05' => 'max:255',
            'remark_06' => 'max:255',
            'remark_07' => 'max:255',
          ]);
          $create = LabSheet::create(array(
              'room_no' => $request ->room_no,
              'date' => $request ->date,
              'date_01' =>$request ->date_01,
              'date_02' =>$request ->date_02,
              'date_03' => $request ->date_03,
              'date_04' =>$request ->date_04,
              'date_05' => $request ->date_05,
              'date_06' =>$request ->date_06,
              'date_07' => $request ->date_07,
              'name_01' => $request ->name_01,
              'name_02' => $request ->name_02,
              'name_03' =>$request ->name_03,
              'name_04' => $request ->name_04,
              'name_05' => $request ->name_05,
              'name_06' => $request ->name_06,
              'name_07' => $request ->name_07,
              'investigation_01' => $request ->investigation_01,
              'investigation_02' => $request ->investigation_02,
              'investigation_03' => $request ->investigation_03,
              'investigation_04' =>$request ->investigation_04,
              'investigation_05' => $request ->investigation_05,
              'investigation_06' => $request ->investigation_06,
              'investigation_07' => $request ->investigation_07,
              'remark_01' => $request ->remark_01,
              'remark_02' =>$request ->remark_02,
              'remark_03' => $request ->remark_03,
              'remark_04' => $request ->remark_04,
              'remark_05' => $request ->remark_05,
              'remark_06' =>$request ->remark_06,
              'remark_07' =>$request ->remark_07,

          ));

            return view('/index');
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
