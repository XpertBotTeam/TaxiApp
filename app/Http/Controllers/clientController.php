<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class clientController extends Controller
{
    public function index()
    {
        return view('admin.client-info');
    }
    public function storeC(Request $request)
    {

        $request->validate([
          'client_name'=>'required',
       'phone'=>'required',
          'gender'=>'required',
          'destination'=>'required',
          'location'=>'required', 
        ]);

        $query = DB::table('clients_info')->insert([
           'client_name'=>$request->input('client_name'),
           'phone'=>$request->input('phone'),
           'gender'=>$request->input('gender'),
           'destination'=>$request->input('destination'),
           'location'=>$request->input('location'), 
        ]);

if($query){
        return back()->with('success','Your Form is Submitted Successfully Thank You !');
       }else{
        return back()->with('fail','Check your input requirement');
}
    } }