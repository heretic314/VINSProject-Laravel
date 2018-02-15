<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProvisionalDischargeSummary;

class ProvisionalDischargeSummaryController extends Controller
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
        return view('/ProvisionalDischargeSummary');
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
        'address' => 'required|max:255',
        'date_of_discharge' => 'required|max:255',
        'addressograph' => 'max:255',
        'ref_by' => 'required|max:255',
        'room_no' => 'required|max:255',
        'diagnosis' => 'required|max:255',
        'condition_on_discharge' => 'required|max:255',
        'advice_on_discharge' => 'required|max:255',
        'followup' => 'required|max:255',
        'collect_discharge_summary_on' => 'required|max:255',
        'collect_discharge_summary_at' => 'required|max:255',
        'collect_discharge_summary_from' => 'required|max:255',
      ]);

      $create = ProvisionalDischargeSummary::create(array(
        'address' => $request->address,
        'date_of_discharge' => $request->date_of_discharge,
        'addressograph' => $request->addressograph,
        'ref_by' => $request->ref_by,
        'room_no' => $request->room_no,
        'diagnosis' => $request->diagnosis,
        'condition_on_discharge' => $request->condition_on_discharge,
        'advice_on_discharge' => $request->advice_on_discharge,
        'followup' => $request->followup,
        'collect_discharge_summary_on' => $request->collect_discharge_summary_on,
        'collect_discharge_summary_at' => $request->collect_discharge_summary_at,
        'collect_discharge_summary_from' => $request->collect_discharge_summary_from,
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
