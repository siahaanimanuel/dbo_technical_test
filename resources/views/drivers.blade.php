@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Driver List</b></div>
                <br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href={{url('driver/create')}} class='btn btn-default'>Registration Driver</a>

                <div class="panel-body">

                    <div class="table table-responsive">
                    <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Car Name</th>
                        <th>Car Capacity</th>
                        <th>Vehicle Number</th>
                        <th>Type Vehicle Number</th>
                        <th>Option</th>
                    </tr>

                    @if(count($drivers) > 0)
                    @foreach($drivers as $driver)
                    <tr>
                        <td>{{$driver['name']}}</td>
                        <td>{{$driver['email']}}</td>
                        <td>{{$driver['phone']}}</td>
                        <td>{{$driver['address']}}</td>
                        <td>{{$driver['gender']}}</td>
                        <td>{{$driver['car_name']}}</td>
                        <td>{{$driver['car_capacity']}}</td>
                        <td>{{$driver['vehicle_registration_number']}}</td>
                        <td>{{$driver['type_vehicle_registration_number']}}</td>
                        <td><a href="{{url('/driver/show/'.$driver['id'])}}" class="btn btn-default btn-xs">Show</a>
                        <a href="{{url('/driver/edit/'.$driver['id'])}}" class="btn btn-default btn-xs">Edit</a>
                        <a href="{{url('/driver/delete/'.$driver['id'])}}" class="btn btn-default btn-xs">Delete</a></td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td>Empty Data</td>
                        </tr>
                    @endif
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection