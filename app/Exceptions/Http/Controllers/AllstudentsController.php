<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();

class AllstudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $allstudent_info = DB::table('student_tbl')
                            ->get();

        $manage_student = view('admin.allstudent')
                          ->with( 'all_Student_info', $allstudent_info);


        return view('layout')
               ->with('allstudent', $manage_student);


      //  return view('admin.allstudent');









    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function stsetting()
    {
        return view('student.stuview');
    }



    public function profile( )
    {
      echo 'hnyhnvn';
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



    public function stedit($student_id)
    {

        $student_description_view =DB::table('student_tbl')
            ->select('*')
            ->where('student_id', $student_id)
            ->first();


        $manage_description_student =view('admin.stedit')
            ->with('student_description_profile', $student_description_view);
        return view( 'layout')
            ->with('stedit',$manage_description_student);



    }





    //update
    public function stup(Request $request ,$student_id)
    {
/*
        $student_description_view =DB::table('student_tbl')
            ->select('*')
            ->where('student_id', $student_id)
            ->first();


        $manage_description_student =view('admin.stedit')
            ->with('student_description_profile', $student_description_view);
        return view( 'layout')
            ->with('stedit',$manage_description_student);

*/

//echo "<pre>";
//print_r($student_id);


        $data =array();
        $data['student_name'] =$request->student_name;
        $data['student_roll'] =$request->student_roll;
        $data['student_fathername'] =$request->student_fathername;
        $data['student_mothername'] =$request->student_mothername;
        $data['student_email'] =$request->student_email;
        $data['student_phone'] =$request->student_phone;
        $data['student_address'] =$request->  student_address;

        $data['student_password'] =$request-> student_password;
        $data['student_admissionyear'] =$request->student_admissionyear;
        $data['student_department'] =$request-> student_department;

DB::table('student_tbl')
     ->where('student_id',$student_id)
    ->update($data);
Session::put('exception','Information Update Successfully');
return Redirect::to('/allstudent');







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
    public function delete($student_id)
    {
        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->delete();
        return Redirect::to('allstudent');



//echo "success";


    }



    //view
    public function view($student_id)
    {
        //return view('admin.stview');
$student_description_view =DB::table('student_tbl')
                        ->select('*')
                        ->where('student_id', $student_id)
                        ->first();


$manage_description_student =view('admin.stview')
                              ->with('student_description_profile', $student_description_view);
return view( 'layout')
       ->with('stview',$manage_description_student);


    }






















}
