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
                <div class="panel-heading"><b>Payments</b></div>
                <br>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('payments/search') }}">
                {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">From : </label>
                        <div class="col-md-3">
                            <input id="from_date" type="date" class="form-control" name="from_date" placeholder=''>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-2  control-label">To : </label>
                        <div class="col-md-3">
                            <input id="to_date" type="date" class="form-control" name="to_date" placeholder=''>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Driver :</label>
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
                        <label for="name" class="col-md-2 control-label">Payment Status :</label>
                        <div class="col-md-4">
                            <select name="payment_status">
                                <option value="all">All</option>
                                <option value="unpaid">Unpaid</option>
                                <option value="paid">Paid</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">
                                Generate
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Total : </label>
                        <div class="col-md-3">
                            <label for="name">{{$total}}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Admin Fee 20% :</label>
                        <div class="col-md-3">
                            <label for="name">{{$admin_fee}}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Grand Total :</label>
                        <div class="col-md-3">
                            <label for="name">{{$grand_total}}</label>
                        </div>
                    </div>
                </form>
                <br>
                <br>

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
                    </tr>

                    @if(count($orders) > 0)
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order['date']}}</td>
                        <td>{{$order['pickup_time']}}</td>
                        <td>Driver</td>
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