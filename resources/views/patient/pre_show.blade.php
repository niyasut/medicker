@extends('layouts.patient')
@section('title', ' - Prescription')
@section('content')
@section('name', 'Prescription')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            This page has been enhanced for printing. Click the print button at the bottom.
          </div>


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                 
                      
                
                  <i class="fas fa-globe"></i> Medicker
                 @foreach ($preiddetails as $preiddetails)
                     
              
                  <small class="float-right">Date:{{$preiddetails->date}} </small>
                  
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                From
                <address>
                  <strong>{{$preiddetails->doctor_name}}</strong><br>
              
                

    
                    
               
                  Specialization : {{$preiddetails->degree}} <br>
                  Hospital : {{$preiddetails->hospital}} <br>
                  {{-- Gender: male<br>
                  Address: hghgfhgfghhhhhhhhhhhhhhhhhh<br> --}}
                  {{-- {{$dinfo}} --}}
                  @endforeach
                </address>
              </div>
           
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                To
                <address>
                  @foreach ($pidsearch as $pidsearch)
                      
                
                  <strong>{{$pidsearch->name}}</strong><br>
                  Age :{{$pidsearch->patient->age}}<br>
                  Gender: {{$pidsearch->patient->gender}}<br>
                  Address: {{$pidsearch->patient->address}}<br>
                  <input type="hidden" id="custId" name="custId" value=" {{$idq=$pidsearch->id}}">
                 
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
              <b>Prescription ID #PRE20-{{$id}}</b><br>
                <br>
               
                <b>Patient ID:</b> {{$pidsearch->id}}<br>
           
                @endforeach
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table id="example2" class="table table-striped">
                  <thead>
                  <tr>
                    <th>Drug</th>
                    <th>dosage</th>
                    <th>frequency</th>
                    <th>days</th>
                    <th>instruction</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($predetails as $predetails)
                  <tr>
               
                    <td>{{$predetails->drug}}</td>
                    <td>{{$predetails->dosage}}</td>
                    <td>{{$predetails->frequency}}</td>
                    <td>{{$predetails->days}}</td>
                    <td>{{$predetails->instruction}}</td>
                
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
        
           
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                {{-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button> --}}
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Generate PDF
                </button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  @endsection