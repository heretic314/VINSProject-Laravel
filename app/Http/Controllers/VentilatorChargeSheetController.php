<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VentilatorChargeSheet;

class VentilatorChargeSheetController extends Controller
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
        return view('VentilatorChargeSheet');
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

        'name'=> 'max:255|required',
        'age'=> 'max:255|required',
        'sex'=> 'max:255|required',
        'bed_no'=> 'max:255|required',
        'time'=> 'max:255|required',
        'date'=> 'max:255|required',
        'mean_pressure'=>'max:255|required',
        'time_slot01'=> 'max:255',
        'time_slot02'=> 'max:255',
        'time_slot03'=> 'max:255',
        'time_slot04'=> 'max:255',
        'mode' => 'max:255|required',
        'tidal_volume' => 'max:255|required',
        'freq_controlled' => 'max:255|required',
        'freq_simv' => 'max:255|required',
        'pressure_control' => 'max:255|required',
        'pressure_support' => 'max:255|required',
        'peep_cpap' => 'max:255|required',
        'flo2' => 'max:255|required',
        'triggering' => 'max:255|required',
        'inp_tv' => 'max:255|required',
        'exp_tv' => 'max:255|required',
        'exp_mv' => 'max:255|required',
        'measured_freq' => 'max:255|required',
        'peak_pressure' => 'max:255|required',
        'end_exp' => 'max:255|required',
        'pressure_low' => 'max:255|required',
        'volume_high_mv' => 'max:255|required',
        'volume_low_mv' => 'max:255|required',
        'gas_supply' => 'max:255|required',
        'power_failure' => 'max:255|required',
        'position' => 'max:255|required',
        'et_tstomy' => 'max:255|required',
        'oral' => 'max:255|required',
        'chest_physio' => 'max:255|required',
        'abg' => 'max:255|required',
        'xray_chest' => 'max:255|required',
        'catheter_mount' => 'max:255|required',
        'filter' => 'max:255|required',
        'ventilator_circuit' => 'max:255|required',
        'et_tube' => 'max:255|required',
      ]);

      $create = VentilatorChargeSheet::create(array(
        'name'=> $request->name,
        'age'=> $request->age,
        'sex'=> $request->sex,
        'bed_no'=> $request->bed_no,
        'time'=> $request->time,
        'date'=> $request->date,
        'time_slot01'=> $request->time_slot01,
        'time_slot02'=> $request->time_slot02,
        'time_slot03'=> $request->time_slot03,
        'time_slot04'=> $request->time_slot04,
        'mode'=> $request->mode,
        'tidal_volume'=> $request->tidal_volume,
        'freq_controlled'=> $request->freq_controlled,
        'freq_simv'=> $request->freq_simv,
        'pressure_control'=> $request->pressure_control,
        'pressure_support'=> $request->pressure_support,
        'peep_cpap'=> $request->peep_cpap,
        'flo2'=> $request->flo2,
        'triggering'=> $request->triggering,
        'inp_tv'=> $request->inp_tv,
        'exp_tv'=> $request->exp_tv,
        'exp_mv'=> $request->exp_mv,
        'measured_freq'=> $request->measured_freq,
        'peak_pressure'=> $request->peak_pressure,
        'mean_pressure'=> $request->mean_pressure,
        'end_exp'=> $request->end_exp,
        'pressure_low'=> $request->pressure_low,
        'volume_high_mv'=> $request->volume_high_mv,
        'volume_low_mv'=> $request->volume_low_mv,
        'gas_supply'=> $request->gas_supply,
        'power_failure'=> $request->power_failure,
        'position'=> $request->position,
        'et_tstomy'=> $request->et_tstomy,
        'oral'=> $request->oral,
        'chest_physio'=> $request->chest_physio,
        'abg'=> $request->abg,
        'xray_chest'=> $request->xray_chest,
        'catheter_mount'=> $request->catheter_mount,
        'filter'=> $request->filter,
        'ventilator_circuit'=> $request->ventilator_circuit,
        'et_tube'=> $request->et_tube,
      ));
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
