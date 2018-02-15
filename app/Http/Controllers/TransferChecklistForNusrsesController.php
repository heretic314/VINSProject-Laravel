<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TransferChecklistForNurses;

class TransferChecklistForNusrsesController extends Controller
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
        return view('\TransferChecklistForNurses');
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
        'transfer_to'=> 'max:255|required',
        'transfer_from'=> 'max:255|required',
        'no01'=> 'max:255',
        'ch01'=> 'max:255',
        'no02'=> 'max:255',
        'ch02'=> 'max:255',
        'no03'=> 'max:255',
        'ch03'=> 'max:255',
        'no04'=> 'max:255',
        'ch04'=> 'max:255',
        'no05'=> 'max:255',
        'ch05'=> 'max:255',
        'no06'=> 'max:255',
        'ch06'=> 'max:255',
        'no07'=> 'max:255',
        'ch07'=> 'max:255',
        'no08'=> 'max:255',
        'ch08'=> 'max:255',
        'no09'=> 'max:255',
        'ch09'=> 'max:255',
        'no10'=> 'max:255',
        'ch10'=> 'max:255',
        'no11'=> 'max:255',
        'ch11'=> 'max:255',
        'no12'=> 'max:255',
        'ch12'=> 'max:255',
        'no13'=> 'max:255',
        'ch13'=> 'max:255',
        'no14'=> 'max:255',
        'ch14'=> 'max:255',
        'no15'=> 'max:255',
        'ch15'=> 'max:255',
        'no16'=> 'max:255',
        'ch16'=> 'max:255',
        'no17'=> 'max:255',
        'ch17'=> 'max:255',
        'no18'=> 'max:255',
        'ch18'=> 'max:255',
        'no19'=> 'max:255',
        'ch19'=> 'max:255',
        'no20'=> 'max:255',
        'ch20'=> 'max:255',
        'no21'=> 'max:255',
        'ch21'=> 'max:255',
        'no22'=> 'max:255',
        'ch22'=> 'max:255',
        'no23'=> 'max:255',
        'ch23'=> 'max:255',
        'no24'=> 'max:255',
        'ch24'=> 'max:255',
        'no25'=> 'max:255',
        'ch25'=> 'max:255',
        'no26'=> 'max:255',
        'ch26'=> 'max:255',
        'no27'=> 'max:255',
        'ch27'=> 'max:255',
        'no28'=> 'max:255',
        'ch28'=> 'max:255',
        'no29'=> 'max:255',
        'ch29'=> 'max:255',
        'no30'=> 'max:255',
        'ch30'=> 'max:255',
        'ch31'=> 'max:255',
        'no32'=> 'max:255',
        'ch32'=> 'max:255',
        'no33'=> 'max:255',
        'ch33'=> 'max:255',
        'no34'=> 'max:255',
        'ch34'=> 'max:255',
        'no35'=> 'max:255',
        'ch35'=> 'max:255',
        'no36'=> 'max:255',
        'ch36'=> 'max:255',
        'no37'=> 'max:255',
        'ch37'=> 'max:255',
        'no38'=> 'max:255',
        'ch38'=> 'max:255',
        'no39'=> 'max:255',
        'ch39'=> 'max:255',
        'no40'=> 'max:255',
        'ch40'=> 'max:255',
        'no41'=> 'max:255',
        'ch41'=> 'max:255',
        'no42'=> 'max:255',
        'ch42'=> 'max:255',
        'pod01'=> 'max:255',
        'pod02'=> 'max:255',
        'pod03'=> 'max:255',
        'pod04'=> 'max:255',
        'pod05'=> 'max:255',
        'pod06'=> 'max:255',
        'pod07'=> 'max:255',
        'pod08'=> 'max:255',
        'pod09'=> 'max:255',
        'pod010'=> 'max:255',
        'pod011'=> 'max:255',
        'pod012'=> 'max:255',
        'pod013'=> 'max:255',
        'tn01'=> 'max:255',
        'tn02'=> 'max:255',
        'tn03'=> 'max:255',
        'rn01'=> 'max:255',
        'rn02'=> 'max:255',
        'rn03'=> 'max:255',
      ]);

      $create = TransferChecklistForNurses::create(array(
          'transfer_to'=> $request->transfer_to,
          'transfer_from'=> $request->transfer_from,
          'no01'=> $request->no01,
          'ch01'=> $request->ch01,
          'no02'=> $request->no02,
          'ch02'=> $request->ch02,
          'no03'=> $request->no03,
          'ch03'=> $request->ch03,
          'no04'=> $request->no04,
          'ch04'=> $request->ch04,
          'no05'=> $request->no05,
          'ch05'=> $request->ch05,
          'no06'=> $request->no06,
          'ch06'=> $request->ch06,
          'no07'=> $request->no07,
          'ch07'=> $request->ch07,
          'no08'=> $request->no08,
          'ch08'=> $request->ch08,
          'no09'=> $request->no09,
          'ch09'=> $request->ch09,
          'no10'=> $request->no10,
          'ch10'=> $request->ch10,

          'no11'=> $request->no11,
          'ch11'=> $request->ch11,
          'no12'=> $request->no12,
          'ch12'=> $request->ch12,
          'no13'=> $request->no13,
          'ch13'=> $request->ch13,
          'no14'=> $request->no14,
          'ch14'=> $request->ch14,
          'no15'=> $request->no15,
          'ch15'=> $request->ch15,
          'no16'=> $request->no16,
          'ch16'=> $request->ch16,
          'no17'=> $request->no17,
          'ch17'=> $request->ch17,
          'no18'=> $request->no18,
          'ch18'=> $request->ch18,
          'no19'=> $request->no19,
          'ch19'=> $request->ch19,
          'no20'=> $request->no20,
          'ch20'=> $request->ch20,

          'no21'=> $request->no21,
          'ch21'=> $request->ch21,
          'no22'=> $request->no22,
          'ch22'=> $request->ch22,
          'no23'=> $request->no23,
          'ch23'=> $request->ch23,
          'no24'=> $request->no24,
          'ch24'=> $request->ch24,
          'no25'=> $request->no25,
          'ch25'=> $request->ch25,
          'no26'=> $request->no26,
          'ch26'=> $request->ch26,
          'no27'=> $request->no27,
          'ch27'=> $request->ch27,
          'no28'=> $request->no28,
          'ch28'=> $request->ch28,
          'no29'=> $request->no29,
          'ch29'=> $request->ch29,
          'no30'=> $request->no30,
          'ch30'=> $request->ch30,



          'ch31'=> $request->ch31,
          'no32'=> $request->no32,
          'ch32'=> $request->ch32,
          'no33'=> $request->no33,
          'ch33'=> $request->ch33,
          'no34'=> $request->no34,
          'ch34'=> $request->ch34,
          'no35'=> $request->no35,
          'ch35'=> $request->ch35,
          'no36'=> $request->no36,
          'ch36'=> $request->ch36,
          'no37'=> $request->no37,
          'ch37'=> $request->ch37,
          'no38'=> $request->no38,
          'ch38'=> $request->ch38,
          'no39'=> $request->no39,
          'ch39'=> $request->ch39,
          'no40'=> $request->no40,
          'ch40'=> $request->ch40,


          'no41'=> $request->no41,
          'ch41'=> $request->ch41,
          'no42'=> $request->no42,
          'ch42'=> $request->ch42,

          'pod01'=> $request->pod01,
          'pod02'=> $request->pod02,
          'pod03'=> $request->pod03,
          'pod04'=> $request->pod04,
          'pod05'=> $request->pod05,
          'pod06'=> $request->pod06,
          'pod07'=> $request->pod07,
          'pod08'=> $request->pod08,
          'pod09'=> $request->pod09,
          'pod010'=> $request->pod010,
          'pod011'=> $request->pod011,
          'pod012'=> $request->pod012,
          'pod013'=> $request->pod013,
          'tn01'=> $request->tn01,
          'tn02'=> $request->tn02,
          'tn03'=> $request->tn03,
          'rn01'=> $request->rn01,
          'rn02'=> $request->rn02,
          'rn03'=> $request->rn03,
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
