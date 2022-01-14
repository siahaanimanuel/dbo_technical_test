<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Drivers;
use Illuminate\Support\Facades\Hash;

class DriversController extends Controller
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
        $total_records = Drivers::count();
        $drivers = Drivers::skip($first)->take($rows)->get(); // Pagination with request rows.
		return array(
            "total_records" => $total_records,
            "drivers" => $drivers
        );
    }


    public function store(Request $request)
    {
        $data = array(

            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'gender' => $request['gender'],
            'car_name' => $request['car_name'],
            'car_capacity' => $request['car_capacity'],
            'vehicle_registration_number' => $request['vehicle_registration_number'],
            'type_vehicle_registration_number' => $request['type_vehicle_registration_number']
        );

        $user_create = array(

            'name' => 'Driver',
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'is_admin' => '0'
        );

        $users = User::insertGetId($user_create);
        $drivers = Drivers::insertGetId($data);
        return array("drivers" => $drivers);
    }

	public function show($id)
	{
	   $driver = Driver::where('id', '=', $id)->get();
       return array("drivers" => $driver);
	}
	
	public function destroy($id_driver)
    {
        $driver = Drivers::where('id', '=', $id_driver)->first();
        $all = Drivers::all();

        // Delete User
        User::where('email', '=', $driver->email)->delete();

        $driver = Drivers::where('id', '=', $id_driver)->delete();
        return array("drivers" => $all);
    }
}
