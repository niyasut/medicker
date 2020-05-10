@extends('layouts.doctor')
@section('title', ' - Dashboard')
@section('content')
@section('name', 'Dashboard')
<section class="patientsearchpage">
  <div class="card">
    <div class="card-header">
     <b>  Hi {{$greetings}} </b>
    </div>
    <div class="card-body">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/uploads/avatars/{{Auth::User()->avatar}}" class="card-img" alt="avatar" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px; ">

            <form enctype="multipart/form-data" action="/doctor_dashboard" method="post">
              {{ csrf_field() }}
              <label for="Update profile image">Update profile image</label>
              <input type="file" name="avatar" id="avatar">
              <button type="submit">submit</button>

          </form>
                

          </div>
          <div class="col-md-8">
            <div class="card-body">
              
         
            
              <h6 class="card-text">Doctor Name : {{Auth::user()->name}}</h6>

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
     <b>  Enter patient id </b>
    </div>
    <div class="card-body">
      
    {{-- <form method="POST" action="{{url("\doctor.doctor_dashboard")}}"> --}}
      <form  action={{'patient_details'}} method="GET">
        {{-- {{ csrf_field() }} --}}
            <div class="input-group">
            <input type="search" class="form-control" placeholder="Enter your patient id" name="patientidsearch" value="{{ request()->input('patientidsearch')}}" aria-label="Search">
              
            </div>
            <br>
            {{-- @error('patientidsearch'){{$message}} @enderror --}}
         
            <div class="pidinputsearch">
            <div class="col-md-15 text-center">
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


