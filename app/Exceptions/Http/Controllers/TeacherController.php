<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public  function  add()
    {
        return view('admin.add_teacher');


    }




















    public function save(Request $request)
    {


        $data = array();
        $data['teachers_name'] = $request->teachers_name;
        $data['teachers_phone'] = $request->teachers_phone;
        $data['teachers_address'] = $request->teachers_address;
        $data['teachers_email'] = $request->teachers_email;

        $data['teachers_department'] = $request->teachers_department;

        $image = $request->file('teachers_image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path('/image');
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {

                $data['teachers_image'] = $image_url;

                DB::table('teachers_tbl')->insert($data);
                Session::put('exception', 'Teacher Added Successfully!!');
                return Redirect::to('/addteacher');

            }

        }

        $data['teachers_image'] = $image_url;
        DB::table('teachers_tbl')->insert($data);
        Session::put('exception', 'Teacher Added Successfully!!');
        return Redirect::to('/addteacher');


        $data['teachers_image'] = $image_url;
        DB::table('teachers_tbl')->insert($data);
        Session::put('exception', 'Teacher Added Successfully!!');
        return Redirect::to('/addteacher');

    }




    public function all()
    {
        $allteacher_info = DB::table('teachers_tbl')
            ->get();

        $manage_teacher = view('admin.allteacher')
            ->with( 'all_teacher_info', $allteacher_info);


        return view('layout')
            ->with('allteacher', $manage_teacher);


        //  return view('admin.allstudent');









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
