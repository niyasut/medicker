
@extends('layouts.app')

@section('content')

  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/slider/bg1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>Welcome To Medicker</h1>
            <p>We Can Manage Your Prescriptions</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="assets/slider/bg2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>Welcome To Medicker</h1>
            <p>We Can Manage Your Prescriptions</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="assets/slider/bg3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>Welcome To Medicker</h1>
            <p>We Can Manage Your Prescriptions</p>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Welcome To Medicker</h1>
      <p class="lead">Complete a simple visit on your phone or computer and get treated today.</p>
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <img src="assets/doctor-with-computer.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">We Can Manage Your Prescriptions</h5>
        <p class="card-text">medicker makes getting a medication easier than ever. medicker’s platform is safe, secure and very affordable. We don’t want our customers to miss out on their medication simply because they don’t have a doctor handy.</p>
      </div>
      
    </div>
    <div class="card">
      <img src="assets/smiling-young-asian-female-doctor-showing-tablet-computer-screen.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Online Prescriptions</h5>
        <p class="card-text">Get refills on existing medications or new prescriptions for everything from antibiotics to birth control, antidepressants, hypertension, diabetes medication and much more. </p>
      </div>
     
    </div>
    <div class="card">
      <img src="assets/doctor-patient.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Our Patients Love Us</h5>
        <p class="card-text">medicker maintains a 100% patient satisfaction rating. never losing your medical data forever</p>
      </div>
     
    </div>
  </div>





@endsection
