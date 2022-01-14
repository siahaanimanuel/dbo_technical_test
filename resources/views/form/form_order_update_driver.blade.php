@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Order {{ $orders['date'] }}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('order/edit_save_driver') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="id" value="{{$orders['id']}}">

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
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection