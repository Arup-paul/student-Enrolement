@extends('layout')

@section('content')



              <div class="col-12  grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Edit Student</h2>
                           <h2 class="alert-success " style=" font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('msg');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('msg',' ');
                        }
                       

                     ?>
                 </h2>
                          <form class="forms-sample" method="post" action="{{URL::to('/update_student',$editstudent->student_id)}}" >

                            {{csrf_field()}}
                             
                              <div class="form-group">
                                  <label for="id1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" id="id1" value="{{$editstudent->student_name}}">
                              </div>

                                <div class="form-group">
                                  <label for="id2">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" id="id2" value="{{$editstudent->student_roll}}">
                              </div>

                               <div class="form-group">
                                  <label for="id3">Student Father Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" id="id3" value="{{$editstudent->student_fathername}}">
                              </div>

                               <div class="form-group">
                                  <label for="id4">Student Mother Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername" id="id4" value="{{$editstudent->student_mothername}}">
                              </div>

                               <div class="form-group">
                                  <label for="id5">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" id="id5" value="{{$editstudent->student_email}}">
                              </div>

                               <div class="form-group">
                                  <label for="id6">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" id="id6" value="{{$editstudent->student_phone}}">
                              </div>

                               <div class="form-group">
                                  <label for="id7">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" id="id7" value="{{$editstudent->student_address}}">
                              </div>

                         

                               <div class="form-group">
                                  <label for="id9">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" id="id9" value="{{$editstudent->student_password}}">
                              </div>


                              <button type="submit" class="btn btn-primary btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>
            
         


@endsection