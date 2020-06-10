<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      // var_dump($query);
      if($query != '')
      {
        //tìm theo tên cũng đcc
       $data = DB::table('nhansu')
        ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
        ->select(DB::raw("nhansu.id, nhansu.Name, BirthDay, StartDay, loainhansu.Name as loaiNhanSu"))
         ->where('nhansu.Name', 'like', '%'.$query.'%')
         // ->Where('BirthDay', 'like', '%'.$query.'%')
         // ->Where('StartDay', 'like', '%'.$query.'%')
         // ->Where('loaiNhanSu', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('nhansu')
       ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
        ->select(DB::raw("nhansu.id, nhansu.Name, BirthDay, StartDay, loainhansu.Name as loaiNhanSu"))
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->Name.'</td>
         <td>'.$row->BirthDay.'</td>
         <td>'.$row->StartDay.'</td>
         <td>'.$row->loaiNhanSu.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
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

