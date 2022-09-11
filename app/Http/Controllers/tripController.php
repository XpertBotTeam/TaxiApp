<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class tripController extends Controller
{

    public function show()
    {
        $trip_Case = DB::table('driver_info')->get()->all();

     return view('admin/trip', compact('trip_Case'));
   }

}


