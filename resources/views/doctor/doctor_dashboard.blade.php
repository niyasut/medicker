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
            {{-- <div class="row"> --}}
              @foreach ($pidsearch as $pidsearch)
              <div class="col-sm-15">


              <div class="card-body">
              
          <div class="card">
            <div class="row no-gutters">
              <div class="col-sm-2">
                <img src="/uploads/avatars/{{$pidsearch->avatar}}" class="card-img" alt="...">
              </div>
         
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




    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Add new Prescription</h3>
      </div>
      <!-- /.card-header -->
        {{-- status updated --}}
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {{-- end status --}}
      <div class="card-body">
      
        <div class="container">
          <form action="/addprescription" method="POST">
            {{csrf_field()}}
            {{ method_field('PUT') }}
          <div class="row clearfix">
              <div class="col-md-12 column">
                  <table class="table table-bordered table-hover" id="tab_logic">
                      <thead>
                          <tr >
                              <th class="text-center">
                                  #
                              </th>
                              <th class="text-center">
                                Drug
                              </th>
                              <th class="text-center">
                                dosage
                              </th>
                              <th class="text-center">
                                frequency
                              </th>
                              <th class="text-center">
                                days
                              </th>
                              <th class="text-center">
                                instruction
                              </th>
                             
                          </tr>
                      </thead>
                      <tbody>
                          <tr id='addr0'>
                              <td>
                              1
                              </td>
                              <td>
                              <input type="text" name='drug[]'  placeholder='Drug' class="form-control"/>
                              </td>
                              <td>
                              <input type="text" name='dosage[]' placeholder='dosage' class="form-control"/>
                              </td>
                              <td>
                              <input type="text" name='frequency[]' placeholder='frequency' class="form-control"/>
                              </td>
                              <td>
                              <input type="text" name='days[]' placeholder='days' class="form-control"/>
                              </td>
                              <td>
                                <input type="text" name='instruction[]' placeholder='instruction' class="form-control"/>
                                </td>
                             
                          </tr>
                          <tr id='addr1'></tr>
                      </tbody>
                  </table>
              </div>
          </div>
          <a id="add_row" class="btn btn-default pull-left">Add Row</a>
          <a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
          <input type="submit" value="submit">
      </div>
    </form>

    
      
      <!-- /.card-body -->
    </div>
    @endforeach
  {{-- </div> row  div --}}
{{-- patient details end --}}



{{-- content end --}}

















 
  @endsection
  