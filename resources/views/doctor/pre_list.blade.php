@extends('layouts.d_patient_search')
@section('title', ' - List Of Prescriptions')
@section('content')
@section('name', 'List Of Prescriptions')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">List Of Prescriptions</h3>
  
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">

      </div>
      <div class="col-sm-12 col-md-6">
          </div>
        </div>
          <div class="row">
              <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Code</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Doctor Name</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Hospital</th>
           
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Options</th>
        </tr>
        </thead>
        <tbody>
       
          @foreach ($alldet as $alldet)
          {{-- @foreach ($users as $users) --}}

        <tr role="row" class="odd">
       
        <td class="sorting_1">#PRE20-{{$id=$alldet->pre_code}}</td>

          <td>{{$alldet->doctor_name}}</td>
          <td>{{$alldet->hospital}}</td>
      
          <td>
          
            <a href="/prescription/{{$id}}" type="button" class="btn btn-block btn-info">Show</a>
          </td>
        </tr>
        {{-- @endforeach --}}
        <input type="hidden" id="custId" name="custId" value=" {{$idq=$idss}}">
       
        @endforeach
      </tbody>
     
      </table></div></div>

    </div>
    </div>
    <!-- /.card-body -->
  </div>



  {{-- @foreach ($users as $users) --}}
  {{-- {{$alldatasession}} --}}
  {{-- {{$alldatasession}} --}}
  {{-- @endforeach --}}
@endsection