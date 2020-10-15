@extends('layouts.app')

@section('content')
@foreach($units as $un)
<div class="container">
    @include('suppliers::layouts.alerts')

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="home-tab" href="{{route('units')}}" role="tab" aria-controls="home" aria-selected="true">List</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
              </li>

            <li class="nav-item">
                <a class="nav-link" id="clients-tab" data-toggle="tab" href="#clients" role="tab" aria-controls="clients" aria-selected="true">Client</a>
              </li>

            <li class="nav-item">
                <a class="nav-link " id="manu-tab" data-toggle="tab" href="#manu" role="tab" aria-controls="manu" aria-selected="true">Manufacturing & Warranty</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " id="version-tab" data-toggle="tab" href="#version" role="tab" aria-controls="version" aria-selected="true">Versions</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " id="cal-tab" data-toggle="tab" href="#cal" role="tab" aria-controls="cal" aria-selected="true">Calibration</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " id="notes-tab" data-toggle="tab" href="#notes" role="tab" aria-controls="notes" aria-selected="true">Notes</a>
              </li>

              
            
            
          </ul>
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"><h3>Unit - {{$un->name}}</h3></div>

                <div class="card-body">
                   
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                    <b>Name</b>
                                    <p>{{$un->name}}</p>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <b>Description</b>
                                        <p>{{$un->description}}</p>
                                        </div>
                                </div>

                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Status</b>
                                        <p>{{$un->status}}</p>
                                        </div>
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Model</b>
                                        <p>{{$un->model}}</p>
                                        </div>
                                </div>

                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Serial Number</b>
                                        <p>{{$un->serial_no}}</p>
                                        </div>
                                </div>
                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Barcode</b>
                                        <p>{{$un->barcode_no}}</p>
                                        </div>
                                </div>

                            </div>
                                 

                        </div>

                        <div class="tab-pane fade show" id="clients" role="tabpanel" aria-labelledby="clients-tab">
                            <div class="form-group">
                                <b>Client</b>
                                <p>{{$un->client}}</p>
                                </div>
                        </div>

                        <div class="tab-pane fade show" id="manu" role="tabpanel" aria-labelledby="manu-tab">
                            <div class="form-group">
                                <b>Manufactured Date</b>
                                <p>{{$un->manufactured_date}}</p>
                                </div>

                                    <div class="form-group">
                                    <b>Warranty Date</b>
                                    <p>{{$un->warranty_date}}</p>
                                    </div>
                        </div>

                        <div class="tab-pane fade show" id="version" role="tabpanel" aria-labelledby="version-tab">
                            <div class="form-group">
                                <b>Software Version</b>
                                <p>{{$un->software_no}}</p>
                                </div>

                                    <div class="form-group">
                                    <b>Firmware Version</b>
                                    <p>{{$un->firmware_no}}</p>
                                    </div>
                        </div>

                        <div class="tab-pane fade show" id="cal" role="tabpanel" aria-labelledby="cal-tab">
                            <div class="form-group">
                                <b>Last Calibrated</b>
                                <p>{{$un->last_calibration_date}}</p>
                                </div>

                                    <div class="form-group">
                                    <b>Next Calibration</b>
                                    <p>{{$un->next_calibration_date}}</p>
                                    </div>
                        </div>

                        <div class="tab-pane fade show" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                            <div class="form-group">
                                <b>Notes</b>
                                <p>{{$un->notes}}</p>
                                </div>
                        </div>

                    </div>
               
                    
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
