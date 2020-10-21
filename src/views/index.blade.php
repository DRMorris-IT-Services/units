@extends('layouts.app')

@section('content')
<div class="container">
    @include('suppliers::layouts.alerts')

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" href="{{route('units')}}" role="tab" aria-controls="home" aria-selected="true">List</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"  role="tab" aria-controls="profile" aria-selected="false">New Unit</a>
            </li>
            
          </ul>
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ __('Units') }}</h3></div>

                <div class="card-body">
                   
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th>Serial No.</th>
                                            <th>Barcode</th>
                                            <th>Description</th>
                                            <th>Manufactured Date</th>
                                            <th>Warranty Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($units as $un)
                                            <tr>
                                                <td>{{$un->name}}</td>
                                                <td>{{$un->serial_no}}</td>
                                                <td>{{$un->barcode_no}}</td>
                                                <td>{{$un->description}}</td>
                                                <td>{{date('d/m/y', strtotime($un->manufactured_date))}}</td>
                                                <td>@if($un->warranty_date < $today)<i class="fa fa-warning text-warning"></i>@endif {{date('d/m/y', strtotime($un->warranty_date))}}</td>
                                                <td>{{$un->status}}</td>
                                                <td>
                                                    <a href="{{route('units.view',['id' => $un->unit_id])}}" ><button class="btn btn-outline-info btn-sm fa fa-eye"></button></a>
                                                    <a href="{{route('units.edit',['id' => $un->unit_id])}}" ><button class="btn btn-outline-warning btn-sm fa fa-edit"></button></a>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="{{ route('units.add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')  

                            <div class="col-md-8">
                                <h4>Add New Unit</h4>

                                <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                                </div>

                                    <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description">
                                    </div>

                                        <div class="form-group">
                                        <label>Model</label>
                                        <input type="text" class="form-control" name="model">
                                        </div>

                                            <div class="form-group">
                                            <label>Serial Number</label>
                                            <input type="text" class="form-control" name="serial_no">
                                            </div>

                                                <div class="form-group">
                                                <label>Barcode</label>
                                                <input type="text" class="form-control" name="barcode">
                                                </div>

                                                    <div class="form-group">
                                                    <label>Manufactured Date</label>
                                                    <input type="text" class="form-control" name="manufactured_date">
                                                    </div>

                                                        <div class="form-group">
                                                        <label>Warranty Date</label>
                                                        <input type="text" class="form-control" name="warranty_date">
                                                        </div>

                                                            <div class="form-group">
                                                            <label>Software Version</label>
                                                            <input type="text" class="form-control" name="software_no">
                                                            </div>

                                                                <div class="form-group">
                                                                <label>Firmware Version</label>
                                                                <input type="text" class="form-control" name="firmware_no">
                                                                </div>

                                                                    <div class="form-group">
                                                                    <label>Last Calibrated</label>
                                                                    <input type="text" class="form-control" name="last_calibration">
                                                                    </div>

                                                                        <div class="form-group">
                                                                        <label>Next Calibration</label>
                                                                        <input type="text" class="form-control" name="next_calibration">
                                                                        </div>

                                                                            <div class="form-group">
                                                                            <label>Client</label>
                                                                            <input type="text" class="form-control" name="client">
                                                                            <select class="form-control" name="client" >
                                                                                <option></option>
                                                                            @foreach($clients as $clients)
                                                                                <option>{{$clients->company}}</option>
                                                                            @endforeach
                                                                            </select>
                                                                            </div>

                                                                            <div class="form-group">
                                                                            <label>Notes</label>
                                                                            <textarea class="form-control" name="notes"></textarea>
                                                                            </div>
                                                                        

                                                <div class="modal-footer card-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>

                            </div>
                        </form>

                            </div>

                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
