<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppointmentBook;

class AppointmentBookController extends Controller
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
        return view('/AppointmentBook');
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
          'date' => 'required|max:255',
          'name_of_patient' => 'required|max:255',
          'contact_no' => 'required|max:255',
          'appointment_time' => 'required|max:255',
          'consultant_name' => 'required|max:255',
        ]);

        $create = AppointmentBook::create(array(
          'date' => $request->date,
          'name_of_patient' => $request->name_of_patient,
          'contact_no' => $request->contact_no,
          'appointment_time' => $request->appointment_time,
          'consultant_name' => $request->consultant_name,
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
