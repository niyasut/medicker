@extends('layouts.master')
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
              
                  
            
              <h2 class="card-title">{{Auth::user()->name }}</h2>
             @foreach ($doctors as $row)
                 
             
              <h5 class="card-text">{{$row->degree}}</h5>
              @endforeach
              <h5 class="card-text">{{Auth::user()->email }}</h5>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
      
        <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Patient Id">
              
            </div>
            <br>
            <div class="niyass">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <b class="glyphicon glyphicon-search">submit</b>
                </button>
              </div>
            </div>
          </form>

    </div>
  </div>
</section>


@endsection