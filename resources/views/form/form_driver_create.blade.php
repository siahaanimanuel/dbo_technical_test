@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Driver Registration</div>
				<div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('driver/save') }}">
                        {{ csrf_field() }}
							
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Driver Name</label>
                            <div class="col-md-6">
                                <textarea id="name" type="text" class="form-control" name="name" placeholder='Name'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <textarea id="email" type="text" class="form-control" name="email" placeholder='Email'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <textarea id="password" type="text" class="form-control" name="password" placeholder='Password'></textarea>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-6">
                                <textarea id="phone" type="text" class="form-control" name="phone" placeholder='Phone Number'></textarea>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <textarea id="address" type="text" class="form-control" name="address" placeholder='Address'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <textarea id="gender" type="text" class="form-control" name="gender" placeholder='Gender'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Car Name</label>
                            <div class="col-md-6">
                                <textarea id="car_name" type="text" class="form-control" name="car_name" placeholder='Car Name'></textarea>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Car Capacity</label>
                            <div class="col-md-6">
                                <textarea id="car_capacity" type="text" class="form-control" name="car_capacity" placeholder='Car Capacity'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Vehicle Number</label>
                            <div class="col-md-6">
                                <textarea id="vehicle_registration_number" type="text" class="form-control" name="vehicle_registration_number" placeholder='Vehicle Number'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Type Vehicle Number</label>
                            <div class="col-md-6">
                                <textarea id="type_vehicle_registration_number" type="text" class="form-control" name="type_vehicle_registration_number" placeholder='Type Vehicle Number'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
