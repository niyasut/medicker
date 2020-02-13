@extends('layouts.master')
@section('title', ' - Doctor Dashboard')
@section('content')
<div class="card-body">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="assets/doctor-avatar-icon-medical-health.jpg" class="card-img" alt="...">
      </div>
<div class="col-md-8">
  <div class="card-body">
    
    @foreach ($pidsearch as $pidsearch)


  
  
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
@endforeach
{{-- <h3>Patient Id Is '{{$pid=request()->input('patientidsearch')}}'</h3> --}}

    
{{-- {{App\User::find($pid)->patient->age }} --}}
 
  @endsection