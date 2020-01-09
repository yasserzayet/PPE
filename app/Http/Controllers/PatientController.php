<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Rdv;
use Illuminate\Http\Request;
use App\Patient;
use DB;
use App\Ordonnance;
use App\Consultation;
use App\Quotation;

class PatientController extends Controller
{
  public function index(Request $request)
  {
    if ($request->session()->has('user')){
      $data = Patient::all();

      return view('patient')->with('data',$data);
    }else {

      return view('welcome');
    }
  }

  public function indexPatAdd(Request $request)
  {
    if ($request->session()->has('user')){
      return view( 'patientCrud/patAdd');
    }
  }

  public function patShow(Request $request)
  {
    if ($request->session()->has('user')){
      //$patients = Patient::where('id','=',$request->input('id'))->first();

      //if($patients != null){
      return view( 'patientCrud/patShow');
    }else{
      return view('welcome');
    }
    //  };
  }



  //registre
  public function registre(Request $request)
  {
    if ($request->session()->has('user')){
      //  $data = Patient::where('NumPat','=',$request->input('numPat'))->first();

      // code...
      //  if($data == null) {

      $user = new Patient();
      //$user->NumPat       = $request->input('numPat');
      //  $user->NumRdv       = $request->input('numRdv');
      $user->NomPat       = $request->input('nom');
      $user->PrenomPat    = $request->input('prenom');
      $user->DateNaissPat = $request->input('DateN');
      $user->SexePat      = $request->input('sexe');
      $user->AddressPat   = $request->input('address');
      $user->TelephPat    = $request->input('phone');
      $user->EmailPat     = $request->input('email');
      $user->save();

      $data = array (
        'string' => 'added',
      );
      return response()->json($user);
      //  }else{

      //  $data = array (
      //  'string' => 'Patient  existe',
      //);
      //return json_encode($data );
    }else{
      return view('welcome');
    }
  }


  //}
  //registre

  public function store(Request $request)
  {
    if ($request->session()->has('user')){

      $input = $request->all();

      $data = Patient::where('NumPat','=',$request->input('numPat'))->first();
    /*  $rdv = Rdv::where('NumRdv','=',$request->input('numRdv'))->first();
      $cons = Consultation::where('NumCons','=',$request->input('numCons'))->first();
*/

      if($data == null){

         Patient::create($input);
        /*$pat = new  Patient(
          ['NumPat'=> $request->get('numPat'),
           'NomPat'=> $request->get('nom'),
           'PrenomPat'=>$request->get('prenom'),
           'DateNaissPat'=>$request->get('DateN'),
           'SexePat'=>$request->get('sexe'),
           'AddressPat'=>$request->get('address'),
           'TelephPat'=>$request->get('phone'),
           'EmailPat'=>$request->get('email')
         ]
       );*//*
        Rdv::create($input);
        Consultation::create($input);
        Ordonnance::create($input);*/

        /*$Rdv->NumRdv  = $input->numRdv;
        $Rdv->DateRdv = $input->DateRdv;
        $Rdv->TimeRdv = $input->TimeRdv;
        $Rdv->NumPat  = $input->numPat;
        $Rdv->save( );
        $conss->NumCons  = $input->numCons;
        $conss->DateCons = $input->DateRdv;
        $conss->NumPat   = $input->numPat;
        $conss->save( );
        $ord->NumOrd  = $input->numOrd;
        $ord->DateOrd = $input->DateRdv;
        $ord->NomMedc = $input->NomMedc;
        $ord->NumCons = $input->numCons;
        $ord->save();*/




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

  public function show($id)
  {
    $patient = Patient::findOrFail($id);
    $Rdv     = Patient::find($id)->patRealtion;
    $cons    = Patient::find($id)->patCons;
    $ord     = DB::table('ordonnances')->join('consultations','ordonnances.NumCons','=','consultations.NumCons')
                                        ->where('NumPat','=',$id)
                                        ->get();
    //$Rdv = DB::table('rdvs')->where('NumPat','=',$id);

  return view( 'patientCrud/patShow')->with('data', $patient)->with('rdv', $Rdv)->with('cons',$cons)->with('ord',$ord);
  //return view( 'patientCrud/patShow',compact('data',''));

  }

  public function update(Request $request, $id)
  {
    if ($request->session()->has('user')){
      $data = Patient::findOrFail($id);
      $data->update($request->all());

      return view('patientCrud/patUpdate')->with('data',$data);
    }else {

      return view('welcome');
    }
  }
  public function update2(Request $requestd,$id)
  {
    if ($request->session()->has('user')){
      $data = Patient::findOrFail($id);
      $data->update($request->all());

      return view('patient')->with('data',$data);
    }else {

      return view('welcome');
    }
  }

  public function destroy($id,Request $request)
  {
    Patient::destroy($id);

    if ($request->session()->has('user')){
      $data = Patient::all( );

      return view('patient')->with('data',$data);
    }else {

      return view('welcome');
    }
  }
}
