<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use App\Rdv;
use App\Ordonnance;
use App\Patient;
use App\Consultation;
use Illuminate\Http\Request;
class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::all();

        return view( 'consultaion/shoCons')->with('data',$consultations);
    }

    public function store(Request $request)
    {
          $Pat = Patient::all();


        return view('consultaion/addCons' )->with('pat',$Pat);

    }

    public function registre(Request $request){
    /*  $cons = new Consultation( );
      $ords = new Ordonnance( );
      $numPat->NumPat      = $request->input('numP');
      $numCons->NumCons    = $request->input('numCons');
      $dateCons->DataCons  = $request->input('DateCons');
      $timeCons->TimeCons  = $request->input('TimeCons');
      $dateOrd->DateOrd    = $request->input('DateCons');
      $numOrd->NumOrd      = $request->input('numOrd');
      $nomMedc->NomMedc    = $request->input('NomMedc');
      $cons->save( );
      $ords->save( );*/


      $input = $request->all( );
      $data = Consultation::where('NumCons','=',$request->input('numCons'))->first();

      if($data == null){

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
    }
    public function show($id)
    {
        $consultation = Consultation::findOrFail($id);

        return response(['data', $consultation ], 200);
    }

    public function update(ConsultationRequest $request, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->update($request->all());

        return response(['data' => $consultation ], 200);
    }

    public function destroy($id)
    {
        Consultation::destroy($id);
        $consultations = Consultation::all();

        return view( 'consultaion/shoCons')->with('data',$consultations);
    }
}
