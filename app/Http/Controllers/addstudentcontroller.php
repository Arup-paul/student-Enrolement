<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class addstudentcontroller extends Controller
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

    public function addstudent(){
        return view('admin.addStudent');
    }

    public function save_student(Request $request){
        $data = array();
        $data['student_name'] = $request->student_name;
        $data['student_roll'] = $request->student_roll;
        $data['student_fathername'] = $request->student_fathername;
        $data['student_mothername'] = $request->student_mothername;
        $data['student_email'] = $request->student_email;
        $data['student_phone'] = $request->student_phone;
        $data['student_address'] = $request->student_address;
        $data['student_password'] = md5($request->student_password);
        $data['student_department'] = $request->student_department;
        $data['student_admissionyear'] = $request->student_admissionyear;
        $image = $request->file('student_image');

        if ($image) {
           $image_name = str_random(20);
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name = $image_name.'.'.$ext;
           $upload_path = 'image/';
           $image_url = $upload_path.$image_full_name;
           $success = $image->move($upload_path,$image_full_name);
           if ($success) {
               $data['student_image']=$image_url;

               DB::table('student_table')->insert($data);
               Session::put('msg','Student Added Succesfully');
               return Redirect::to('/addstudent');

           }

        }

         $data['student_image']=$image_url;

               DB::table('student_table')->insert($data);
               Session::put('msg','Student Added Succesfully');
               return Redirect::to('/addstudent');

                 DB::table('student_table')->insert($data);
               Session::put('msg','Student Added Succesfully');
               return Redirect::to('/addstudent');





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
