<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Session;
use Session;
session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    //logout
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
//return view('admin.admin_login');
    }

//student login part

    public function student_dashboard()
    {

        return view('student.dashboard');
    }

    public function stlogin_dashboard (Request $request){
        //return view('admin/dashboard');

        $email=$request->student_email;
        $password=md5($request->student_password);
        $result = DB::table('student_tbl')
            ->where('student_email',$email)
            ->where('student_password',$password)
            ->first();


        /*  $email=$request->email;
          $password=md5($request->password);
          $result = DB::table('users')
              ->where('email',$email)
              ->where('password',$password)
              ->first();

  */

        if($result)
        {

          //  Session::put('student_email',$result-student_email);
            //Session::put('student_id',$result-student_id);
            return Redirect::to('/student_dashboard');

        }
        else{

           // Session::put('exception', 'INVALID OPERATION ');
            return Redirect::to('/student_dashboard');
        }





    }
























    public function admin_dashboard()
    {

        return view('admin.dashboard');
    }



    public function login_dashboard (Request $request){
     //return view('admin/dashboard');

       $email=$request->admin_email;
        $password=md5($request->admin_password);
        $result = DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();


      /*  $email=$request->email;
        $password=md5($request->password);
        $result = DB::table('users')
            ->where('email',$email)
            ->where('password',$password)
            ->first();

*/

        if($result)
        {

        Session::put('admin_email',$result-admin_email);
        Session::put('admin_id',$result-admin_id);
        return Redirect::to('admin_dashboard');

        }
else{

Session::put('exception', 'INVALID OPERATION ');
    return Redirect::to('admin_dashboard');
}





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
