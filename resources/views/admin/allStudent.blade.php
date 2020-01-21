@extends('layout')

@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Student Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($all_student_data as $item) 
                      <tr>
                          <td>{{$item->student_roll}}</td>
                          <td>{{$item->student_name}}</td>
                          <td>{{$item->student_phone}}</td>
                          <td><img src="{{$item->student_image}}" width="150px" height="150px" alt=""></td>
                          <td>{{$item->student_address}}</td>
                          <td>
                             @if($item->student_department==1)
                             <span class="label label-success">{{"CSE"}}</span>
                             @elseif($item->student_department==2)
                             <span class="label label-success">{{"EEE"}}</span>
                             @elseif($item->student_department==3)
                             <span class="label label-success">{{"BBA"}}</span>
                             @elseif($item->student_department==4)
                             <span class="label label-success">{{"ECE"}}</span>
                             @elseif($item->student_department==5)
                             <span class="label label-success">{{"ME"}}</span>
                             @endif
                          </td>
                          
                         
                          <td>
                              <a href="{{URL::to('view_student/'.$item->student_id )}}">
                            <button class="btn btn-outline-primary">View</button>
                             </a>
                              <a href="{{URL::to('edit_student/'.$item->student_id )}}">
                            <button class="btn btn-outline-info">Edit</button>
                              </a>
                            <a href="{{URL::to('delete_student/'.$item->student_id )}}" id="delete">
                              <button class="btn btn-outline-danger">Delete</button>
                            </a>
                          </td>
                      </tr>
                      @endforeach
                      
                      
                          
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
     
            
         


@endsection