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
            <div class="card-header"><h3>Edit Unit - {{$un->name}}</h3></div>

                <div class="card-body">
                   
                    <form action="{{ route('units.update',['id' => $un->unit_id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                    <b>Name</b>
                                    <input type="text" class="form-control" name="name" value="{{$un->name}}" onchange="submit()">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <b>Description</b>
                                        <input type="text" class="form-control" name="description" value="{{$un->description}}" onchange="submit()">
                                        </div>
                                </div>

                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Status</b>
                                        <select name="status" class="form-control" onchange="submit()">
                                            <option>{{$un->status}}</option>
                                            <option>-----</option>
                                            <option>Active</option>
                                            <option>Under Repair</option>
                                            <option>DeActive</option>
                                        </select>

                                        </div>
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Model</b>
                                        <input type="text" class="form-control" name="model" value="{{$un->model}}" onchange="submit()">
                                        </div>
                                </div>

                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Serial Number</b>
                                        <input type="text" class="form-control" name="serial_no" value="{{$un->serial_no}}" onchange="submit()">
                                        </div>
                                </div>
                                <div class="col-4">
                                        <div class="form-group">
                                        <b>Barcode</b>
                                        <input type="text" class="form-control" name="barcode" value="{{$un->barcode_no}}" onchange="submit()">
                                        </div>
                                </div>

                            </div>
                                 

                        </div>

                        <div class="tab-pane fade show" id="clients" role="tabpanel" aria-labelledby="clients-tab">
                            <div class="form-group">
                                <b>Client</b>
                                <input type="text" class="form-control" name="client" value="{{$un->client}}" onchange="submit()">

                                <br>
                                <select class="form-control" name="client" onchange="submit()">
                                    <option></option>
                                @foreach($clients as $clients)
                                    <option>{{$clients->company}}</option>
                                @endforeach
                                </select>
                                </div>
                        </div>

                        <div class="tab-pane fade show" id="manu" role="tabpanel" aria-labelledby="manu-tab">
                            <div class="form-group">
                                <b>Manufactured Date</b>
                                <input type="text" class="form-control" name="manufactured_date" value="{{$un->manufactured_date}}" onchange="submit()">
                                </div>

                                    <div class="form-group">
                                    <b>Warranty Date</b>
                                    <input type="text" class="form-control" name="warranty_date" value="{{$un->warranty_date}}" onchange="submit()">
                                    </div>
                        </div>

                        <div class="tab-pane fade show" id="version" role="tabpanel" aria-labelledby="version-tab">
                            <div class="form-group">
                                <b>Software Version</b>
                                <input type="text" class="form-control" name="software_no" value="{{$un->software_no}}" onchange="submit()">
                                </div>

                                    <div class="form-group">
                                    <b>Firmware Version</b>
                                    <input type="text" class="form-control" name="firmware_no" value="{{$un->firmware_no}}" onchange="submit()">
                                    </div>
                        </div>

                        <div class="tab-pane fade show" id="cal" role="tabpanel" aria-labelledby="cal-tab">
                            <div class="form-group">
                                <b>Last Calibrated</b>
                                <input type="text" class="form-control" name="last_calibration" value="{{$un->last_calibration_date}}" onchange="submit()">
                                </div>

                                    <div class="form-group">
                                    <b>Next Calibration</b>
                                    <input type="text" class="form-control" name="next_calibration" value="{{$un->next_calibration_date}}" onchange="submit()">
                                    </div>
                        </div>

                        <div class="tab-pane fade show" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                            <div class="form-group">
                                <b>Notes</b>
                                <textarea class="form-control" name="notes" onchange="submit()">{{$un->notes}}</textarea>
                                </div>
                        </div>

                    </div>
                    </form>
                    
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
