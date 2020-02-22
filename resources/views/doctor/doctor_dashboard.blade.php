@extends('layouts.doctor')
@section('title', ' - Doctor Dashboard')
@section('content')
@section('name', 'Patient Details')


<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

      <div class="info-box-content">
        <span class="info-box-number">Blood Sugar</span>
        <span class="info-box-text">Fasting :125 MG %</span>
        <span class="info-box-textr">PP :290 MG %</span>
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
        <span class="info-box-number">Blood pressure</span>
        <span class="info-box-text">Systolic : 120</span>
        <span class="info-box-text">Diastolic : 120</span>
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
        
        <span class="info-box-number">Blood Group</span>
        <span class="info-box-text">A+ve</span>
        <span class="info-box-text">. </span>
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
        <span class="info-box-number">Gender</span>
        <span class="info-box-text">Female</span>
        <span class="info-box-text"> .</span>
        
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
     
          {{-- Patient details --}}
            <div class="row">
              @foreach ($pidsearch as $pidsearch)
              <div class="col-sm-5">


              <div class="card-body">
              
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/uploads/avatars/{{$pidsearch->avatar}}" class="card-img" alt="...">
              </div>
          <div class="col-md-8">
          <div class="card-body">

            <h4 class="card-title">Patient Name: {{$pidsearch->name}}</h4>
            <h6 class="card-text">age : {{$pidsearch->patient->age}}</h6>
            <h6 class="card-text">Sex :{{$pidsearch->patient->sex}}</h6>
            <h6 class="card-text">Blood Group :{{$pidsearch->patient->blood_group}}</h6>
            <h6 class="card-text">Patient ID :{{$pid=request()->input('patientidsearch')}}</h6>
          </div>
          </div>
          </div>
          </div>
          </div>
    </div>
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Add new Prescription</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form">
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Text</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Text Disabled</label>
                <input type="text" class="form-control" placeholder="Enter ..." disabled="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Textarea</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Textarea Disabled</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
              </div>
            </div>
          </div>

          <!-- input states -->
         

          <div class="row">
            <div class="col-sm-6">
              <!-- checkbox -->
          
            </div> 
            <div class="col-sm-6">
              <!-- radio -->
            
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <!-- select -->
              <div class="form-group">
                <label>Select</label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Select Disabled</label>
                <select class="form-control" disabled="">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>
          </div>

         
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    @endforeach
  </div>
{{-- patient details end --}}



{{-- content end --}}

















 
  @endsection