<?php

namespace App\Http\Controllers;

use App\DoctorsHandover;

use Illuminate\Http\Request;

use Illuminate\Http\DoctorsHandoverRequest;

class DoctorsHandoverController extends Controller
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
        return view('/DoctorsHandover');
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
          'diagnosis' => 'required:max:255',
          'day_night' => 'required|max:255',
          'surgical'  => 'max:255',
          'tentative_date_of_surgery'  => 'max:255',
          'date_of_surgery'  => 'max:255',
          'physician_reference'  => 'max:255',
          'other_physician_reference'  => 'max:255',
          'pathological_investigation_done'  => 'max:255',
          'pathological_investigation_collected'  => 'max:255',
          'radiological_investigation_collected'  => 'max:255',
          'other_investigation_done'  => 'max:255',
          'other_investigation_collected'  => 'max:255',
          'echo'  => 'max:255',
          'physiotherapy'  => 'max:255',
          'specific_instruction'  => 'max:255',
          'verified_by_assistant'  => 'max:255',
          'name_given'  => 'required|max:255',
          'date_given'  => 'required|max:255',
          'time_given'  => 'required|max:255',
          'name_taken'  => 'required|max:255',
          'date_taken'  => 'required|max:255',
          'time_taken'  => 'required|max:255',
        ]);

        $create = DoctorsHandover::create(array(
          'diagnosis' => $request->diagnosis,
          'day_night' => $request->day_night,
          'surgical' => $request->surgical,
          'tentative_date_of_surgery' => $request->tentative_date_of_surgery,
          'date_of_surgery' => $request->date_of_surgery,
          'physician_reference' => $request->physician_reference,
          'other_physician_reference' => $request->other_physician_reference,
          'pathological_investigation_done' => $request->pathological_investigation_done,
          'pathological_investigation_collected' => $request->pathological_investigation_collected,
          'radiological_investigation_collected' => $request->radiological_investigation_collected,
          'other_investigation_done' => $request->other_investigation_done,
          'other_investigation_collected' => $request->other_investigation_collected,
          'echo' => $request->echo,
          'physiotherapy' => $request->physiotherapy,
          'specific_instruction' => $request->specific_instruction,
          'verified_by_assistant' => $request->verified_by_assistant,
          'name_given' => $request->name_given,
          'date_given' => $request->date_given,
          'time_given' => $request->time_given,
          'name_taken' => $request->name_taken,
          'date_taken' => $request->date_taken,
          'time_taken' => $request->time_taken,

        ));
        return \Redirect::to('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorsHandover  $doctorsHandover
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorsHandover $doctorsHandover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorsHandover  $doctorsHandover
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorsHandover $doctorsHandover)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorsHandover  $doctorsHandover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorsHandover $doctorsHandover)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorsHandover  $doctorsHandover
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorsHandover $doctorsHandover)
    {
        //
    }
}
