<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class vehicleController extends Controller
{
    public function all_vehicle(){
        $vehicles = Vehicle::all();
        return $vehicles;
    }
}
