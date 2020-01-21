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
    return view('login');
});

//Admin login
Route::get('/backend','AdminController@index');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::post('/adminlogin','AdminController@admin_login');

//admin logout
Route::get('/logout','AdminController@logout');

//add student
Route::get('/addstudent','addstudentcontroller@addstudent');
Route::post('/save_student','addstudentcontroller@save_student');

//tution fee
Route::get('/tutionfee','tutionfeecontroller@tutionfee');

//all student
Route::get('/allstudent','AllStudentsController@allstudent');
Route::get('/view_student/{student_id}','AllStudentsController@deletestudent');
Route::get('/view_student/{student_id}','AllStudentsController@viewstudent');
Route::get('/edit_student/{student_id}','AllStudentsController@editstudent');
Route::post('/update_student/{student_id}','AllStudentsController@updatestudent');


//many department teacher
Route::get('/bba','bbacontroller@bbateacher');
Route::get('/cse','csecontroller@cseteacher');
Route::get('/ece','ececontroller@eceteacher');
Route::get('/ece','ececontroller@eceteacher');
Route::get('/eee','eeecontroller@eeeteacher');
Route::get('/me','mecontroller@meteacher');
//many department student
Route::get('/bba','bbacontroller@bbastudent');
Route::get('/cse','csecontroller@csestudent');
Route::get('/ece','ececontroller@ecestudent');
Route::get('/ece','ececontroller@ecestudent');
Route::get('/eee','eeecontroller@eeestudent');
Route::get('/me','mecontroller@mestudent');
 




 