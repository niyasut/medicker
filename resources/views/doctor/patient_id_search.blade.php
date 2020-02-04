@extends('layouts.master')
@section('title', ' - Patient Id Search')
@section('content')


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
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search">submit</i>
                </button>
              </div>
          </form>

    </div>
  </div>
</section>


@endsection