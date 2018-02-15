<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DrugRequisition;

class DrugRequisitionController extends Controller
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
        return view('/DrugRequisition');
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
        'name_of_drug_01' => 'max:255',
        'quantity_01' => 'max:255',
        'batch_no_01' => 'max:255',
        'expiry_date_01' => 'max:255',
        'issued_by_01' => 'max:255',
        'received_by_01' => 'max:255',
        'name_of_drug_02' => 'max:255',
        'quantity_02' => 'max:255',
        'batch_no_02' => 'max:255',
        'expiry_date_02' => 'max:255',
        'issued_by_02' => 'max:255',
        'received_by_02' => 'max:255',
        'name_of_drug_03' => 'max:255',
        'quantity_03' => 'max:255',
        'batch_no_03' => 'max:255',
        'expiry_date_03' => 'max:255',
        'issued_by_03' => 'max:255',
        'received_by_03' => 'max:255',
        'name_of_drug_04' => 'max:255',
        'quantity_04' => 'max:255',
        'batch_no_04' => 'max:255',
        'expiry_date_04' => 'max:255',
        'issued_by_04' => 'max:255',
        'received_by_04' => 'max:255',
        'name_of_drug_05' => 'max:255',
        'quantity_05' => 'max:255',
        'batch_no_05' => 'max:255',
        'expiry_date_05' => 'max:255',
        'issued_by_05' => 'max:255',
        'received_by_05' => 'max:255',
        'name_of_drug_06' => 'max:255',
        'quantity_06' => 'max:255',
        'batch_no_06' => 'max:255',
        'expiry_date_06' => 'max:255',
        'issued_by_06' => 'max:255',
        'received_by_06' => 'max:255',
        'name_of_drug_07' => 'max:255',
        'quantity_07' => 'max:255',
        'batch_no_07' => 'max:255',
        'expiry_date_07' => 'max:255',
        'issued_by_07' => 'max:255',
        'received_by_07' => 'max:255',
        'name' => 'required|max:255',
        'date' => 'required|max:255',
        'time' => 'required|max:255',

      ]);

      $create = DrugRequisition::create(array(
        'name_of_drug_01' => $request->name_of_drug_01,
        'quantity_01' => $request->quantity_01,
        'batch_no_01' => $request->batch_no_01,
        'expiry_date_01' => $request->expiry_date_01,
        'issued_by_01' => $request->issued_by_01,
        'received_by_01' => $request->received_by_01,
        'name_of_drug_02' => $request->name_of_drug_02,
        'quantity_02' => $request->quantity_02,
        'batch_no_02' => $request->batch_no_02,
        'expiry_date_02' => $request->expiry_date_02,
        'issued_by_02' => $request->issued_by_02,
        'received_by_02' => $request->received_by_02,
        'name_of_drug_03' => $request->name_of_drug_03,
        'quantity_03' => $request->quantity_03,
        'batch_no_03' => $request->batch_no_03,
        'expiry_date_03' => $request->expiry_date_03,
        'issued_by_03' => $request->issued_by_03,
        'received_by_03' => $request->received_by_03,
        'name_of_drug_04' => $request->name_of_drug_04,
        'quantity_04' => $request->quantity_04,
        'batch_no_04' => $request->batch_no_04,
        'expiry_date_04' => $request->expiry_date_04,
        'issued_by_04' => $request->issued_by_04,
        'received_by_04' => $request->received_by_04,
        'name_of_drug_05' => $request->name_of_drug_05,
        'quantity_05' => $request->quantity_05,
        'batch_no_05' => $request->batch_no_05,
        'expiry_date_05' => $request->expiry_date_05,
        'issued_by_05' => $request->issued_by_05,
        'received_by_05' => $request->received_by_05,
        'name_of_drug_06' => $request->name_of_drug_06,
        'quantity_06' => $request->quantity_06,
        'batch_no_06' => $request->batch_no_06,
        'expiry_date_06' => $request->expiry_date_06,
        'issued_by_06' => $request->issued_by_06,
        'received_by_06' => $request->received_by_06,
        'name_of_drug_07' => $request->name_of_drug_07,
        'quantity_07' => $request->quantity_07,
        'batch_no_07' => $request->batch_no_07,
        'expiry_date_07' => $request->expiry_date_07,
        'issued_by_07' => $request->issued_by_07,
        'received_by_07' => $request->received_by_07,
        'name' => $request->name,
        'date' => $request->date,
        'time' => $request->time,
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
