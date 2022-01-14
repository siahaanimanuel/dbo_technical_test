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
                <div class="panel-heading">Order List</div>
                <br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href={{url('orders/create')}} class='btn btn-default'>Create Order</a>

                <div class="panel-body">

                    <div class="table table-responsive">
                    <table class="table table-bordered">
                    <tr>
                        <th>Date</th>
                        <th>Pickup Time</th>
                        <th>Driver</th>
                        <th>Shipper Name</th>
                        <th>Shipper Phone</th>
                        <th>Shipper Address</th>
                        <th>Receiver Name</th>
                        <th>Receiver Phone</th>
                        <th>Receiver Address</th>
                        <th>Order Type</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Fee Status</th>
                        <th>Delivery Status</th>
                        <th>Option</th>
                    </tr>

                    @if(count($orders) > 0)
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order['date']}}</td>
                        <td>{{$order['pickup_time']}}</td>
                        <td>{{$order['name']}}</td>
                        <td>{{$order['shipper_name']}}</td>
                        <td>{{$order['shipper_phone']}}</td>
                        <td>{{$order['pickup_address']}}</td>
                        <td>{{$order['receiver_name']}}</td>
                        <td>{{$order['receiver_phone']}}</td>
                        <td>{{$order['drop_address']}}</td>
                        <td>{{$order['order_type']}}</td>
                        <td>{{$order['quantity']}}</td>
                        <td>{{$order['price']}}</td>
                        @if($order['fee_status'] == "Paid")
                            <td style="color:blue;"><b>{{$order['fee_status']}}</b></td>
                        @else
                            <td style="color:red;"><b>{{$order['fee_status']}}</b></td>
                        @endif
                        
                        @if($order['delivery_status'] == "Pickup")
                            <td style="color:#FFCA33;"><b>{{$order['delivery_status']}}</b></td>
                        @elseif($order['delivery_status'] == "On The Way To Receiver")
                            <td style="color:#4FFF33;"><b>{{$order['delivery_status']}}</b></td>
                        @elseif($order['delivery_status'] == "Delivered")
                            <td style="color:blue;"><b>{{$order['delivery_status']}}</b></td>
                        @else
                            <td>{{$order['delivery_status']}}</td>
                        @endif

                        <td><a href="{{url('/order/show/'.$order['id'])}}" class="btn btn-default btn-xs">Show</a>
                        <a href="{{url('/order/edit/driver/'.$order['id'])}}" class="btn btn-default btn-xs">Edit</a>
                        <a href="{{url('/order/delete/'.$order['id'])}}" class="btn btn-default btn-xs">Delete</a></td>
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