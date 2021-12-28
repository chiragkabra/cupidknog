<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
    $user=User::all()->except(Auth::User()->id);
       return view('Admindash',compact('user'));
   }
public function livesearch(Request $request)
{

    if($request->ajax())
    {
     $output = '';
     $query = $request->get('query');
     if($query != '')
     {
      $data = User::where('name', 'like', '%'.$query.'%')
        ->orWhere('gender', 'like', '%'.$query.'%')
        ->orWhere('occupation', 'like', '%'.$query.'%')
        ->orWhere('family_type', 'like', '%'.$query.'%')
        ->orWhere('manglik', 'like', '%'.$query.'%')
        // ->orWhere('PostalCode', 'like', '%'.$query.'%')
        // ->orWhere('Country', 'like', '%'.$query.'%')
        ->get();

     }
     else
     {
      $data = User::all()->except(Auth::User()->id);
     }
     $total_row = $data->count();
     if($total_row > 0)
     {
      foreach($data as $row)
      {
       $output .= '
       <tr>
       <td>'.$row->id.'</td>
        <td>'.$row->name.'</td>
        <td>'.$row->email.'</td>
        <td>'.$row->gender.'</td>
        <td>'.$row->occupation.'</td>
         <td>'.$row->family_type.'</td>
         <td>'.$row->manglik.'</td>
       </tr>
       ';
      }
     }
     else
     {
      $output = '
      <tr>
       <td align="center" colspan="8">No Data Found</td>
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

