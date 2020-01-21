@extends('layout')

@section('content')



              <div class="col-12  grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Student</h2>
                           <h2 class="alert-success " style=" font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('msg');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('msg',' ');
                        }
                       

                     ?>
                 </h2>
                          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">

                            {{csrf_field()}}
                             
                              <div class="form-group">
                                  <label for="id1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" id="id1" placeholder="Enter Student Name">
                              </div>

                                <div class="form-group">
                                  <label for="id2">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" id="id2" placeholder="Enter Student Roll">
                              </div>

                               <div class="form-group">
                                  <label for="id3">Student Father Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" id="id3" placeholder="Enter Student RoFather namell">
                              </div>

                               <div class="form-group">
                                  <label for="id4">Student Mother Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername" id="id4" placeholder="Enter Student Mother name">
                              </div>

                               <div class="form-group">
                                  <label for="id5">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" id="id5" placeholder="Enter Student Email">
                              </div>

                               <div class="form-group">
                                  <label for="id6">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" id="id6" placeholder="Enter Student Phone Number">
                              </div>

                               <div class="form-group">
                                  <label for="id7">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" id="id7" placeholder="Enter Student Address">
                              </div>

                           
                              <div class="form-group">
                                  <label>Student Image </label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="id8" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="student_image" id="id8" aria-describedby="fileHelp">
                                    </div>
                                  </div>
                              </div>

                               <div class="form-group">
                                  <label for="id9">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" id="id9" placeholder="Enter Student Password">
                              </div>

                               <div class="form-group">
                                  <label for="id10">Student Department</label>
                                  <select class="form-control" name="student_department" id="id10">
                                  	<option value="">Select Department.............</option>
                                  	<option value="1">CSE</option>
                                  	<option value="2">EEE</option>
                                  	<option value="3">BBA</option>
                                  	<option value="4">ECE</option>
                                  	<option value="5">ME</option>
                                  </select>
                              </div>

                               <div class="form-group">
                                  <label for="id11">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" id="id11" placeholder="Enter Student Admission Year">
                              </div>

                              <button type="submit" class="btn btn-info btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
            
         


@endsection