@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Order</div>
				<div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('order/save') }}">
                        {{ csrf_field() }}
							
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Order Date</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" placeholder=''>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Pick Up Time</label>
                            <div class="col-md-6">
                                <input id="pickup_time" type="time" class="form-control" name="pickup_time" placeholder=''>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Driver</label>
                            <div class="col-md-6">
                                <select name="id_driver">
                                @if(count($drivers) > 0)
                                    @foreach($drivers as $driver)
                                        <option value="{{$driver['id']}}">{{$driver['id']}} > {{$driver['name']}}</option>
                                    @endforeach
                                @else
                                    <option value="Null">Tidak Ada Driver yang Tersedia</option>
                                @endif
                            </select>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="shipper_name" type="text" class="form-control" name="shipper_name" placeholder='Shipper Name'></textarea>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="shipper_phone" type="text" class="form-control" name="shipper_phone" placeholder='Shipper Phone'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="pickup_address" type="text" class="form-control" name="pickup_address" placeholder='Pickup Address'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="receiver_name" type="text" class="form-control" name="receiver_name" placeholder='Receiver Name'></textarea>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="receiver_phone" type="text" class="form-control" name="receiver_phone" placeholder='Receiver Phone'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="drop_address" type="text" class="form-control" name="drop_address" placeholder='Drop Address'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Order Type</label>
                            <div class="col-md-6">
                                <select name="order_type">
                                    <option value="Hampers">Hampers</option>
                                    <option value="Cup Cake">Cup Cake</option>
                                    <option value="Dry Cake">Dry Cake</option>
                                    <option value="Wet Cake">Wet Cake</option>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="quantity" type="text" class="form-control" name="quantity" placeholder='Quantity'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="price" type="text" class="form-control" name="price" placeholder='Price'></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fee Status</label>
                            <div class="col-md-6">
                                <select name="fee_status">
                                    <option value="unpaid">unpaid</option>
                                    <option value="paid">paid</option>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Delivery Status</label>
                            <div class="col-md-6">
                                <select name="delivery_status">
                                    <option value="Pickup">Pickup</option>
                                    <option value="On The Way To Receiver">On The Way To Receiver</option>
                                    <option value="Delivered">Delivered</option>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <textarea id="notes" type="text" class="form-control" name="notes" placeholder='Notes'></textarea>
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
