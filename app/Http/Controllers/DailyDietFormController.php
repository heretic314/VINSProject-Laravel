<?php

namespace App\Http\Controllers;

use App\DailyDietForm;

use Illuminate\Http\Request;

class DailyDietFormController extends Controller
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
        return view('/DailyDietForm');
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
          'floor_name' => 'required|max:255',
          'cross_verified_by' => 'required|max:255',
          'date' => 'required|max:255',
          'room_no' => 'required|max:255',
          'patient_name' => 'required|max:255',
          'diet_suggested_by' => 'required|max:255',
          'm_tea' => 'max:255',
          'm_breakfast' => 'max:255',
          'soup' => 'max:255',
          'lunch' => 'max:255',
          'e_snacks' => 'max:255',
          'juice' => 'max:255',
          'dinner' => 'max:255',
          'milk' => 'max:255',
          'remarks' => 'max:255',

        ]);

        $create = DailyDietForm::create(array(
          'floor_name' => $request->floor_name,
          'cross_verified_by' => $request->cross_verified_by,
          'date' => $request->date,
          'room_no' => $request->room_no,
          'patient_name' => $request->patient_name,
          'diet_suggested_by' => $request->diet_suggested_by,
          'm_tea' => $request->m_tea,
          'm_breakfast' => $request->m_breakfast,
          'soup' => $request->soup,
          'lunch' => $request->lunch,
          'e_snacks' => $request->e_snacks,
          'juice' => $request->juice,
          'dinner' => $request->dinner,
          'milk' => $request->milk,
          'remarks' => $request->remarks,

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
