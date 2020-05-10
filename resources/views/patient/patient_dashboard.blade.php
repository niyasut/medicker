
@extends('layouts.patient')
@section('title', ' - Patient Dashboard')
@section('content')
@section('name', 'Patient Details')
<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Messages</span>
        <span class="info-box-number">1,410</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Bookmarks</span>
        <span class="info-box-number">410</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Uploads</span>
        <span class="info-box-number">13,648</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Likes</span>
        <span class="info-box-number">93,139</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>

{{-- Profile card Start --}}

<div class="col-sm-15">


  <div class="card-body">
  
<div class="card">
<div class="row no-gutters">
  <div class="col-sm-2">
    <img src="/uploads/avatars/avatar.jpg" class="card-img" alt="...">
  </div>

<div class="card-body">

<h4 class="card-title">Patient Name: {{auth::User()->name}}
</h4>
<h6 class="card-text">age : {{auth::User()->patient->age}}</h6>
<h6 class="card-text">Gender :{{auth::user()->patient->gender}}</h6>
<h6 class="card-text">Blood Group :{{auth::user()->patient->blood_group}}</h6>
{{-- <h6 class="card-text">Blood Group :{{$pidsearch->id}}</h6> --}}
<h6 class="card-text">Patient ID :{{auth::user()->id}}</h6>

</div>

</div>
</div>
</div>
</div>


{{-- Profile card end --}}


  @endsection