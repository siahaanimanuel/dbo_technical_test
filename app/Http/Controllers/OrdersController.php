<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Orders;
use App\Drivers;

class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request)
    {   
        $first = $request['first'];
        $rows =$request['rows'];
        $total_records = Orders::count();
        
        $orders = Orders::leftjoin('drivers', 'orders.id_driver', '=', 'drivers.id')->skip($first)->take($rows)->get();
		return array(
            "total_records" => $total_records,
            "orders" => $orders
        );
    }

    public function store(Request $request)
    {
        $data = array(
            'date' => $request['date'],
            'pickup_time' => $request['pickup_time'],
            'id_driver' => $request['id_driver'],
            'shipper_name' => $request['shipper_name'],
            'shipper_phone' => $request['shipper_phone'],
            'pickup_address' => $request['pickup_address'],
            'receiver_name' => $request['receiver_name'],
            'receiver_phone' => $request['receiver_phone'],
            'drop_address' => $request['drop_address'],
            'order_type' => $request['order_type'],
            'quantity' => $request['quantity'],
            'price' => $request['price'],
            'fee_status' => $request['fee_status'],
            'delivery_status' => $request['delivery_status'],
            'notes' => $request['notes']
        );

        $orders = Orders::insertGetId($data);
        return array("orders" => $orders);
    }


    public function getPaymentByDriver(Request $request)
    {   
        if(!$request['id_driver']) {
            $return_view = 'payment_search_driver';
            $driver_email = auth()->user()->email;
            $id_driver = Drivers::where('email', '=', $driver_email)->first();
            $id_driver = $id_driver->id;
        }
        else {
            $return_view = 'payment_search';
            $id_driver = $request['id_driver'];
        }
        if($request['payment_status'] == "all") {
            $payments = Orders::where('id_driver', '=', $id_driver)
                ->where('date', '>=', $request['from_date']." 00:00:00")
                ->where('date', '<=', $request['to_date']." 23:59:59");

            $total = $payments->sum('price');
            $payments = $payments->get();
        }
        else {
            $payments = Orders::where('id_driver', '=', $id_driver)
                ->where('date', '>=', $request['from_date']." 00:00:00")
                ->where('date', '<=', $request['to_date']." 23:59:59")
                ->where('fee_status', '=', $request['payment_status']);

            $total = $payments->sum('price');
            $payments = $payments->get();
        }

        $admin_fee = (20/100)*$total;
        $grand_total = $total-$admin_fee;
        $drivers = Drivers::all();

		return array(
            "orders", $payments,
            "drivers", $drivers,
            "total", $total,
            "admin_fee", $admin_fee,
            "grand_total", $grand_total
        );
    }

	public function show($id)
    {
       $order = Order::where('id', '=', $id)->get();
       return array("drivers" => $order);
    }
	
	public function destroy($id_order)
    {
        $orders = Orders::where('id', '=', $id_order)->delete();
        return array("orders" => $orders);
    }
}
