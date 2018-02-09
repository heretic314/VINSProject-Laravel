<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CodeBlueEvaluationForm;

class CodeBlueEvaluationFormController extends Controller
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
        return view('/CodeBlueEvaluationForm');
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
          'drill' => 'required|max:255',
          'actual_code_blue' => 'required|max:255',
          '_00' => 'required|max:255',
          'comm_00' => 'max:255',
          '_01' => 'required|max:255',
          'comm_01' => 'max:255',
          '_02' => 'required|max:255',
          'comm_02' => 'max:255',
          '_03' => 'required|max:255',
          'comm_03' => 'max:255',
          '_04' => 'required|max:255',
          'comm_04' => 'max:255',
          '_05' => 'required|max:255',
          'comm_05' => 'max:255',
          '_06' => 'required|max:255',
          'comm_06' => 'max:255',
          '_07' => 'required|max:255',
          'comm_07' => 'max:255',
          '_08' => 'required|max:255',
          'comm_08' => 'max:255',
          '_09' => 'required|max:255',
          'comm_09' => 'max:255',
        ]);

        $create = CodeBlueEvaluationForm::create(array(
          'drill' => $request->drill,
          'actual_code_blue' => $request->actual_code_blue,
          '_00' => $request->_00,
          'comm_00' => $request->comm_00,
          '_01' => $request->_01,
          'comm_01' => $request->comm_01,
          '_02' => $request->_02,
          'comm_02' => $request->comm_02,
          '_03' => $request->_03,
          'comm_03' => $request->comm_03,
          '_04' => $request->_04,
          'comm_04' => $request->comm_04,
          '_05' => $request->_05,
          'comm_05' => $request->comm_05,
          '_06' => $request->_06,
          'comm_06' => $request->comm_06,
          '_07' => $request->_07,
          'comm_07' => $request->comm_07,
          '_08' => $request->_08,
          'comm_08' => $request->comm_08,
          '_09' => $request->_09,
          'comm_09' => $request->comm_09,
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
