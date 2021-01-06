<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{
    function index(Request $request){


        if($request->has("work")){
            
            $workId = Work::where("slug", $request->work)->first();
            $works = Work::where("is_fashion_merch", 0)->get();
            $index = 0;
            $workIndex = 0;
            foreach($works as $work){

                if($workId->id == $work->id){
                    $workIndex = $index;
                }
                $index++;
            }


            return view("works", ["workIndex" => $workIndex]);
            

        }else{
            return view("works");
        }

       
       

    }
}
