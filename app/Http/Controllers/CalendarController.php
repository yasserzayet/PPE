<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use App\Ordonnance;
use App\Consultation;
class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $rdv = Rdv::all();
        return view( "/Appointments/allAppointments")->with('data',$rdv);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        if ($request->session()->has('user')){

          $input = $request->all();

          $data = Rdv::where('NumRdv','=',$request->input('numRdv'))->first();
          $cons = Consultation::where('NumCons','=',$request->input('numCons'))->first();

          if($data == null && $cons == null){

            Rdv::create($input);

            Consultation::create($input);
            Ordonnance::create($input);

            $data = array (
              'string' => 'added',
            );
            return response()->json($data);

          }else {
            $data = array (
              'string' => 'Error',
            );
            return response()->json($data);
          }
        }else {
          return view('welcome');
        }
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
