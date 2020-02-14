@extends('layouts.master')
@section('title', ' - Doctor Dashboard')
@section('content')

{{-- Vertical Nav Bar Start --}}
          <div class="sidenav">
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#clients">Clients</a>
            <a href="#contact">Contact</a>
            <button class="dropdown-btn">Dropdown 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
            <a href="#contact">Search</a>
          </div>
          {{--  Content start --}}
          <div class="main">
          {{-- Patient details --}}
            <div class="row">
              @foreach ($pidsearch as $pidsearch)
              <div class="col-sm-5">


              <div class="card-body">
              
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="assets/doctor-avatar-icon-medical-health.jpg" class="card-img" alt="...">
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
    <div class="col-sm-5">
                         <div class="card-body">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="assets/doctor-avatar-icon-medical-health.jpg" class="card-img" alt="...">
              </div>
        <div class="col-md-8">
          <div class="card-body">

            <h4 class="card-title">Patient Name: name123</h4>
            <h6 class="card-text">age : name123</h6>
            <h6 class="card-text">Sex :name123</h6>
            <h6 class="card-text">Blood Group :name123</h6>
            <h6 class="card-text">Patient ID :name123</h6>
          </div>
        </div>
        </div>
        </div>
        </div> 
    </div>
    @endforeach
  </div>
{{-- patient details end --}}

</div>

{{-- content end --}}
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


{{-- vertical Nav bar end --}}













 
  @endsection