<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Http\Request;

use App\Patient;
use App\LoginModel;


class LoginController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    if ($request->session()->has('user')) {
      //
      $pat = Patient::all();
      return view( 'dash')->with("data",$pat);
    }else {
      // code...
      return view('welcome');
    }

  }


  public function search(){

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
  public function registre(Request $request)
  {
    $data = LoginModel::where('username','=',$request->input('user'))->first();
    // code...
    if($data == null) {
      $user = new LoginModel();
      $user->username = $request->input('user');
      $user->password = $request->input('pwd');
      $user->save();

      return response()->json($user);
    }else{

      $data = array (
        'string' => 'Username  existe',
      );
      return json_encode($data );
    }


  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function login(Request $request)
  {

      //
      $data = LoginModel::where('username','=',$request->input('user'))
      ->where('password','=',$request->input('pwd'))->first();

      // code...
      if($data == null) {
        $data = array (
          'string' => 'Username not found',
        );
        return json_encode($data );
      }else{
        $request->session()->put('user' ,$request->input('user'));
        $data = array (
          'string' => 'dashbord',
        );
        return json_encode($data );

    }
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function logout(Request $request)
  {
    //
    $request->session()->pull('user');
    return view('welcome');
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
