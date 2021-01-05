<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipality;

class MunicipalityController extends Controller
{
    function fetch($department_id){

        $municipalities = Municipality::where("department_id", $department_id)->get();
        return response()->json(["municipalities" => $municipalities]);

    }
}
