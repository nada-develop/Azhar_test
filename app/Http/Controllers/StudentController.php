<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;
class StudentController extends Controller
{
    function index()
    {
     return view('students.live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('students')
         ->where('sit_no', 'like', '%'.$query.'%')
         ->orWhere('student_name', 'like', '%'.$query.'%')->get();
        //  ->orderBy('CustomerID', 'desc')


      }
      else
      {
       $data = DB::table('students')
         ->orderBy('sit_no', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->sit_no.'</td>
         <td>'.$row->student_name.'</td>
         <td>'.$row->year.'</td>
         <td>'.$row->student_status.'</td>
         <td>'.$row->student_institute.'</td>
         <td>'.$row->student_address.'</td>
         <td>'.$row->student_term.'</td>
         <td>'.$row->student_result.'</td>
         <td>'.$row->student_total.'</td>
         <td><a href="/result/'.$row->id.'" >طباعة</a></td>
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

    public function result($id){
        $student=Student::find($id);
        return view('students.result', compact('student'));

}
}
