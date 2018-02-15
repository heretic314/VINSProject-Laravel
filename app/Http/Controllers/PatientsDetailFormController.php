<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PatientsDetailForm;

class PatientsDetailFormController extends Controller
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
        return view('/PatientsDetailForm');
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
          'date' => 'required|max:255',
          'time' => 'required|max:255',
          'first_name' => 'required:max:255',
          'middle_name' => 'required|max:255',
          'last_name' => 'required|max:255',
          'date_of_birth' => 'required|max:255',
          'sex' => 'required',
          'address' => 'required|max:255',
          'phone_no' => 'required|max:255',
          'mobile_no' => 'required|max:255',
          'reference_dr' => 'required|max:255',
          'consulting_dr' => 'required|max:255',
          'case' => 'required|max:255',
        ]);

        $create = PatientsDetailForm::create(array(
          'date' => $request->date,
          'time' => $request->time,
          'first_name' => $request->first_name,
          'middle_name' => $request->middle_name,
          'last_name' => $request->last_name,
          'date_of_birth' => $request->date_of_birth,
          'sex' => $request->sex,
          'address' => $request->address,
          'phone_no' => $request->phone_no,
          'mobile_no' => $request->mobile_no,
          'reference_dr' => $request->reference_dr,
          'consulting_dr' => $request->consulting_dr,
          'case' => $request->case,
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
