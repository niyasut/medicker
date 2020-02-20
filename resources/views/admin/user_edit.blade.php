@extends('layouts.admin')
@section('title', ' - User Edit') 
@section('content') 
@section('name', 'User Edit') 

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">User Edit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="/user_update/{{ $users->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="card-body">
        <div class="form-group">
          <label>Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$users->name}}">
        </div>
        <div class="form-group">
          <label>Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$users->email}}">
        </div>
        <div class="form-group">
          <label >User Type</label>
            <select class="form-control" name="usertype">
              <option value="admin">Admin</option>
              <option value="doctor">Doctor</option>
              <option value="patient">Patient</option>
              <option value="">Non</option>
              
            </select>
          </div>
        </div>
  
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/users" class="btn btn-danger">Cancel</a>
      </div>
     
    </form>
  </div>


@endsection