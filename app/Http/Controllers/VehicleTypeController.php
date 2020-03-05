<?php

namespace App\Http\Controllers;

use App\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function add_type(Request $request){
        
        $this->validate($request, [
            'vehicle_type' => 'required',
        ]);

        $type = New VehicleType();
        $type->vehicle_type = $request->vehicle_type;
        $type->save();
    }

    public function all_type(){
        $type = VehicleType::all();
        return response()->Json([
            'types' => $type
        ],200);


    }
}
