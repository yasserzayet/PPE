<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use DB;

class AutoCompleteController extends Controller
{
  //
  public function search(Request $request)
  {
    /*  $data = Patient::select("NomPat")
    ->where("NomPat","LIKE","%{$request->input('query')}%")
    ->get();

    return response()->json($data);*/

    if($request->ajax())
    {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $data = DB::table('patients')
        ->where('NomPat', 'like', '%'.$query.'%')
        ->orWhere('PrenomPat', 'like', '%'.$query.'%')
        ->get();

      }
      $total_row = $data->count();
      if($total_row > 0)
      {
        foreach($data as $row)
        {
          $output .= '
          <tr>
          <td><h4 class="ui image header">
          <img src="/img/av.png" class="ui mini rounded image">
          <div class="content">
          '.$row->NomPat.'
          </div>
          </h4>
          </td>".
          "<td id="val"></td>"
          ."</tr>
          ';
        }
      }
      else
      {
        $output = '
        <tr>
        <td align="center" colspan="4">No Data Found</td>
        </tr>
        ';
      }
      $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
      );

      echo json_encode($data);
    }
  }
}
