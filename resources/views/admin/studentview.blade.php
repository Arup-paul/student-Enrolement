@extends('layout')
@php
     function convert_department($value){
      $values= [
           1=>'CSE',
           2=>'EEE',
           3=>'BBA',
           4=>'ECE',
           5=>'ME'
      ];

      return $values[$value];
 }
@endphp
@section('content')

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
              	
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>

                  <img src="{{URL::to($viewstudent->student_image)}}" alt="">
                  <p class="name">{{$viewstudent->student_name}}</p>
                 
                  <a class="email" href="#">{{$viewstudent->student_email}}</a>
                  <a class="number" href="#">{{$viewstudent->student_phone}}</a>
                </div>
         
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-6 mb-3">About</h2>
                 
                  </div>
                  <div class="info-links">
                    <a class="website">Father Name:
                      <i class="icon-globe icon"></i>
                      <span>{{$viewstudent->student_fathername}}</span>
                    </a>
                     <a class="website">Mother Name:
                      <i class="icon-globe icon"></i>
                      <span>{{$viewstudent->student_mothername}}</span>
                    </a>
                     <a class="website">Student Roll:
                      <i class="icon-globe icon"></i>
                      <span>{{$viewstudent->student_roll}}</span>
                    </a>
                     <a class="website">Student Address:
                      <i class="icon-globe icon"></i>
                      <span>{{$viewstudent->student_address}}</span>
                    </a>

                     <a class="website">Student Department:
                      <i class="icon-globe icon"></i>
                      <span>{{convert_department($viewstudent->student_department)}}</span>
                    </a>
                    

                     <a class="website">Student Admission Year:
                      <i class="icon-globe icon"></i>
                      <span>{{$viewstudent->student_admissionyear}}</span>
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
        
          </div>
     
         


@endsection