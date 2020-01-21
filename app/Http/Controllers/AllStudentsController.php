<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AllStudentsController extends Controller
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

     public function allstudent(){
        $all_student = DB::table('student_table')
                      ->get();
         $manage_student =   view('admin.allstudent')->with('all_student_data',$all_student);          
        return view('layout')->with('allstudent',$manage_student);
    }

      public function deletestudent($student_id){
        DB::table('student_table')
             ->where('student_id',$student_id)
             ->delete();

             return Redirect::to('/allstudent');
      }

       public function viewstudent($student_id){
          $view_student = DB::table('student_table')
                      ->select('*')
                      ->where('student_id',$student_id)
                      ->first();
         $views_student =   view('admin.studentview')->with('viewstudent',$view_student);          
        return view('layout')->with('studentview',$views_student);
       }

         public function editstudent($student_id){
          $edit_student = DB::table('student_table')
                      ->select('*')
                      ->where('student_id',$student_id)
                      ->first();
         $edit_student =   view('admin.studentedit')->with('editstudent',$edit_student);          
        return view('layout')->with('studentedit',$edit_student);
       }


    public function updatestudent(Request $request,$student_id){
        $data = array();
        $data['student_name'] = $request->student_name;
        $data['student_roll'] = $request->student_roll;
        $data['student_fathername'] = $request->student_fathername;
        $data['student_mothername'] = $request->student_mothername;
        $data['student_email'] = $request->student_email;
        $data['student_phone'] = $request->student_phone;
        $data['student_address'] = $request->student_address;
        $data['student_password'] = md5($request->student_password);
        

               DB::table('student_table')
               ->where('student_id',$student_id)
               ->update($data);
               Session::put('msg','Student Updated Succesfully');
               return Redirect::to('/allstudent');






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
