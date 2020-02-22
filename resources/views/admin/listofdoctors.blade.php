@extends('layouts.admin')
@section('title', ' - List Of Doctors')
@section('content')
@section('name', 'List of Doctors')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Users List</h3> --}}
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Add</button>

            {{-- Add Button Showing page --}}
           
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/add_newuser" method="POST">
                      {{ csrf_field() }}
                      {{-- <div class="form-group">
                        <label for="recipient-name" class="col-form-label">id</label>
                        <input type="text" name="addid" class="form-control" id="recipient-name">
                      </div> --}}
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" name="password" class="form-control " id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Degree</label>
                        <input type="text" name="degree" class="form-control" id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Specialization</label>
                        <input type="text" name="Specialization" class="form-control" id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" id="recipient-name" >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hospital</label>
                        <input type="text" name="hospital" class="form-control" id="recipient-name" >
                      </div>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>











            {{-- add button end --}}
      





          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
                 {{-- status updated --}}
                 @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                 </div>
             @endif
             {{-- end status --}}
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Options</th>
                {{-- <th>Delete</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->usertype}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" data-toggle="modal" data-target="#infomodel{{$user->id}}" class="btn btn-app" style="color:blue">
                            <i class="fas fa-info-circle"></i> info
                        </button>

                          {{-- Add Button Showing page --}}
           
            <div class="modal fade" id="infomodel{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$user->name}} Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <img src="uploads/avatars/{{$user->avatar}}" class="card-img" alt="avatar" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px; ">

              

                    <div class="modal-body">

                        
                          
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                            <div class="name">{{$user->name}}</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <div class="emailClass">{{$user->email}}</div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <div class="phoneClass">{{$user->username}}</div>
                          </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Degree</label>
                                <div class="phoneClass">{{$user->doctor->degree}}</div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Specialization</label>
                                <div class="phoneClass">{{$user->doctor->specialization}}</div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <div class="addressClass">{{$user->doctor->address}}</div>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <div class="phoneClass">{{$user->doctor->phone_number}}</div>
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hospital</label>
                                <div class="profileClass">{{$user->doctor->hospital}}</div>
                            </div>
        
        
                    </div>
                  </div>
                </div>
              </div>

              {{-- add button end --}}
        
  


                        <button type="button" data-toggle="modal" data-target="#editmodel{{$user->id}}" class="btn btn-app" style="color:green">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <div class="modal fade" id="editmodel{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="/user_update/{{ $user->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    {{-- <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">id</label>
                                      <input type="text" name="addid" class="form-control" id="recipient-name">
                                    </div> --}}
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Name</label>
                                      <input type="text" name="name" class="form-control" id="recipient-name" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Email</label>
                                      <input type="email" name="email" class="form-control" id="recipient-name" value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Username</label>
                                      <input type="text" name="username" class="form-control" id="recipient-name" value="{{$user->username}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Password</label>
                                      <input type="password" name="password" class="form-control " id="recipient-name" value="{{$user->password}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Degree</label>
                                      <input type="text" name="degree" class="form-control" id="recipient-name" value="{{$user->doctor->degree}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Specialization</label>
                                      <input type="text" name="Specialization" class="form-control" id="recipient-name" value="{{$user->doctor->specialization}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Address</label>
                                      <input type="text" name="address" class="form-control" id="recipient-name" value="{{$user->doctor->address}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Mobile</label>
                                      <input type="text" name="mobile" class="form-control" id="recipient-name" value="{{$user->doctor->phone_number}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Hospital</label>
                                      <input type="text" name="hospital" class="form-control" id="recipient-name" value="{{$user->doctor->hospital}}">
                                    </div>
                                    
                                
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
               
                <form action="/user_delete/{{$user->id}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-app" style="color:red">
                    <i class="fas fa-trash-alt"></i> Delete
                  </button>
                </form>
            </div>
                </td>
                {{-- <td>
                  <form action="/user_delete/{{$user->id}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
                </td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>


  
@endsection