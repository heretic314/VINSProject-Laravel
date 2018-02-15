<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BloodTransfusionForm;

class BloodTransfusionFormController extends Controller
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
        return view('/BloodTransfusionForm');
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
        'patient_name'  => 'required|max:255',
        'ipd_no'  => 'required|max:255',
        'age'  => 'required|max:255',
        'sex'  => 'required|max:255',
        'date'  => 'required|max:255',
        'time'  => 'required|max:255',
        'blood_group'  => 'required|max:255',
        'history_bt'  => 'required|max:255',
        'adv'  => 'required|max:255',
        'blood_bag_no'  => 'required|max:255',
        'blood_bag_group'  => 'required|max:255',
        'prod_name'  => 'required|max:255',
        'name_blood_bank'  => 'required|max:255',
        'expiry_date'  => 'required|max:255',
        'checked_by'  => 'required|max:255',
        'unit_nurse'  => 'required|max:255',
        'start_time'  => 'required|max:255',
        'end_time'  => 'required|max:255',
        'minor_reaction' => 'max:255',
        'moderate' => 'max:255',
        'major_reactions' => 'max:255',
        'time_adverse' => 'max:255',
      ]);

      $create = BloodTransfusionForm::create(array(
        'patient_name' => $request->patient_name,
        'ipd_no' => $request->ipd_no,
        'age' => $request->age,
        'sex' => $request->sex,
        'date' => $request->date,
        'time' => $request->time,
        'blood_group' => $request->blood_group,
        'history_bt' => $request->history_bt,
        'adv' => $request->adv,
        'blood_bag_no' => $request->blood_bag_no,
        'blood_bag_group' => $request->blood_bag_group,
        'prod_name' => $request->prod_name,
        'name_blood_bank' => $request->name_blood_bank,
        'expiry_date' => $request->expiry_date,
        'checked_by' => $request->checked_by,
        'unit_nurse' => $request->unit_nurse,
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
        'minor_reaction' => $request->minor_reaction,
        'moderate' => $request->moderate,
        'major_reactions' => $request->major_reactions,
        'time_adverse' => $request->time_adverse,
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
