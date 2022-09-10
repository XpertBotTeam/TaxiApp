<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class driverController extends Controller
{
    public function index()
    {
        return view('admin.driver-info');
    }
    public function storeD(Request $request)
    {

        $request->validate([
          'driver_name'=>'required',
       'phone'=>'required',
          'gender'=>'required',
          'driver_name'=>'required',
          'location'=>'required', 
          'color' =>'required',
          

          
        ]);

        $query = DB::table('driver_info')->insert([
           'driver_name'=>$request->input('driver_name'),
           'phone'=>$request->input('phone'),
           'gender'=>$request->input('gender'),
           'car_model'=>$request->input('car_model'),
           'color'=>$request->input('color'),
           'location'=>$request->input('location'), 
          
        ]);

if($query){
        return back()->with('success','Your Form is Submitted Successfully Thank You !');
       }else{
        return back()->with('fail','Check your input requirement');
}
    } }

