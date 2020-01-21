<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class Admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.admin_login');
    }
   // login dashboard
    public function admin_dashboard(){
         return view('admin.dashboard');
    }

    public function admin_login(Request $request)
    {
      //return view('admin.dashboard');
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
        ->where('admin_email',$admin_email)
        ->where('admin_password',$admin_password)
        ->first();
         
         if($result){
           Session::put('admin_email',$result->admin_email);
           Session::put('admin_id',$result->admin_id);
           return Redirect('/admin_dashboard');
           
         }else{
            Session::put('msg','Email Or Password Invalid');
            return Redirect('/backend');
         }

    }

    //logout

    public function logout(){

        Session::put('admin_name',null);
        Session::put('admin_id',null);

        return Redirect::to('/backend');
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
