@extends('layouts.app')

@section('title', ' - Faq')

@section('content')
<section id="slider">
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
  </section>
  
<div class="faq">
    <h1> Questions And Answers Asked Frequently</h1>
</div>


<div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Tell me something about yourself in brief.
          </button>
        </h2>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum dolor risus, at maximus mi mollis vitae. Cras vel erat quis tellus tempus interdum. Curabitur at vehicula leo, eget venenatis metus. Nunc varius enim et libero volutpat vestibulum. Integer dolor risus, rhoncus sed laoreet sit amet, congue vitae ligula. Vivamus vestibulum, augue ac suscipit interdum, libero nisl aliquam odio, eu vulputate est sapien sit amet nunc. Ut tempor tellus mauris, vel aliquam tortor efficitur at. Nullam dapibus sagittis turpis. Mauris vulputate massa id imperdiet dictum.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            What are your strengths and weaknesses?
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum dolor risus, at maximus mi mollis vitae. Cras vel erat quis tellus tempus interdum. Curabitur at vehicula leo, eget venenatis metus. Nunc varius enim et libero volutpat vestibulum. Integer dolor risus, rhoncus sed laoreet sit amet, congue vitae ligula. Vivamus vestibulum, augue ac suscipit interdum, libero nisl aliquam odio, eu vulputate est sapien sit amet nunc. Ut tempor tellus mauris, vel aliquam tortor efficitur at. Nullam dapibus sagittis turpis. Mauris vulputate massa id imperdiet dictum.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            What is your greatest fear?
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum dolor risus, at maximus mi mollis vitae. Cras vel erat quis tellus tempus interdum. Curabitur at vehicula leo, eget venenatis metus. Nunc varius enim et libero volutpat vestibulum. Integer dolor risus, rhoncus sed laoreet sit amet, congue vitae ligula. Vivamus vestibulum, augue ac suscipit interdum, libero nisl aliquam odio, eu vulputate est sapien sit amet nunc. Ut tempor tellus mauris, vel aliquam tortor efficitur at. Nullam dapibus sagittis turpis. Mauris vulputate massa id imperdiet dictum.
        </div>
      </div>
    </div>
  </div>


@endsection