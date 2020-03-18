<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});
Route::get('/cpanel',function (){

    return view('admin/admin_login');
});
//LOGOUT
Route::get('/logout','AdminController@logout');


//ADMIN LOGIN
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');



//student
//Route::post('/studentlogin','AdminController@student_dashboard');
Route::post('/studentlogin','AdminController@stlogin_dashboard');
Route::get('/student_dashboard','AdminController@student_dashboard');



//cse
Route::get('/cse','CSEController@cse');


//EEE
Route::get('/eee','EEEController@eee');

//PHM

Route::get('/phm','PHMController@phm');

//BBA
Route::get('/bba','BBAController@bba');

//swe
Route::get('/swe','SWEController@swe');






//Tution fee


Route::get('/tutionfee','TutionController@tution');


//All student

Route::get('/allstudent','AllstudentsController@all');


//Add student
Route::get('/addstudent','AddstudentsController@add');
Route::post('/save_student','AddstudentsController@sv');


//dlt
Route::get('/student_dlt/{student_id}','AllstudentsController@delete');
//viw
Route::get('/studentview/{student_id}','AllstudentsController@view');
//edit
Route::get('/studentedit/{student_id}','AllstudentsController@stedit');

Route::post('/update_student/{student_id}','AllstudentsController@stup');

//ss
Route::get('/st_setting','AllstudentsController@stsetting');
Route::get('/st_profile','AllstudentsController@profile');


//teachers
Route::get('/allteacher','TeacherController@all');
Route::get('/addteacher','TeacherController@add');
Route::post('/save_teacher','TeacherController@save');


//edit
Route::get('/tcrview','TeacherController@view');
Route::get('/tcredit','TeacherController@edit');
Route::post('/tcrdlt','TeacherController@tcrup');




Route::get('/viewprofile','VpController@vip');
Route::get('/setting','SetController@st');

