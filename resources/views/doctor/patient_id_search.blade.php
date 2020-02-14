@extends('layouts.admin')
@section('title', ' - Patient Id Search')
@section('content')

<section class="patientsearchpage">
  <div class="card">
    <div class="card-header">
       Hi {{Auth::user()->name }}
    </div>
    <div class="card-body">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/doctor-avatar-icon-medical-health.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              
                  
            
              <h2 class="card-title">{{Auth::user()->name}}</h2>
              <h6 class="card-text">Qualification :{{Auth::user()->doctor->degree }} ,{{Auth::user()->doctor->specialization }} </h6>
              <h6 class="card-text">Email :{{Auth::user()->email }}</h6>
              <h6 class="card-text">Mobile number :{{Auth::user()->doctor->phone_number }}</h6>
              <h6 class="card-text">Mobile number :{{Auth::user()->doctor->hospital }}</h6>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>


<section class="patientsearchpage">
  <div class="card">
    <div class="card-header">
       Enter Patient Id Number
    </div>
    <div class="card-body">
      
    {{-- <form method="POST" action="{{url("\doctor.doctor_dashboard")}}"> --}}
      <form  action={{'doctor_dashboard'}} method="GET">
        {{ csrf_field() }}
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter Patient Id" name="patientidsearch" value="{{ request()->input('patientidsearch')}}">
              
            </div>
            <br>
            {{-- @error('patientidsearch'){{$message}} @enderror --}}
         
            <div class="niyass">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <b class="glyphicon glyphicon-search" onclick="patientidsearch()">submit</b>
                </button>
              </div>
            </div>
            {{-- Error Message --}}
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          </form>

    </div>
  </div>
</section>
{{-- <script>
function patientidsearch() {
  alert ("Enter the Patient Id");
  
}

</script> --}}

@endsection


