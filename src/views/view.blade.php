@extends('layouts.app')

@section('content')
@foreach($units as $un)
<div class="container">
    @include('suppliers::layouts.alerts')

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" href="{{route('units')}}" role="tab" aria-controls="home" aria-selected="true">List</a>
            </li>
            
            
          </ul>
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"><h3>Unit - {{$un->name}}</h3></div>

                <div class="card-body">
                   
               

                    <div class="form-group">
                    <label>Name</label>
                    <p>{{$un->name}}</p>
                    </div>

                        <div class="form-group">
                        <label>Description</label>
                        <p>{{$un->description}}</p>
                        </div>

                            <div class="form-group">
                            <label>Model</label>
                            <p>{{$un->model}}</p>
                            </div>

                                <div class="form-group">
                                <label>Serial Number</label>
                                <p>{{$un->serial_no}}</p>
                                </div>

                                    <div class="form-group">
                                    <label>Barcode</label>
                                    <p>{{$un->barcode_no}}</p>
                                    </div>

                                        <div class="form-group">
                                        <label>Manufactured Date</label>
                                        <p>{{$un->manufactured_date}}</p>
                                        </div>

                                            <div class="form-group">
                                            <label>Warranty Date</label>
                                            <p>{{$un->warranty_date}}</p>
                                            </div>

                                                <div class="form-group">
                                                <label>Software Version</label>
                                                <p>{{$un->software_no}}</p>
                                                </div>

                                                    <div class="form-group">
                                                    <label>Firmware Version</label>
                                                    <p>{{$un->firmware_no}}</p>
                                                    </div>

                                                        <div class="form-group">
                                                        <label>Last Calibrated</label>
                                                        <p>{{$un->last_calibration_date}}</p>
                                                        </div>

                                                            <div class="form-group">
                                                            <label>Next Calibration</label>
                                                            <p>{{$un->next_calibration_date}}</p>
                                                            </div>

                                                                <div class="form-group">
                                                                <label>Client</label>
                                                                <p>{{$un->client}}</p>
                                                                </div>

                                                                <div class="form-group">
                                                                <label>Notes</label>
                                                                <p>{{$un->notes}}</p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <p>{{$un->status}}</p>
                                                                    </div>

                    
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
