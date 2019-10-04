<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class reportController extends Controller
{
    public function count(){

        //total count

        $resultcount=Result::all()->count();
      

        
        return view('reports', compact('resultcount'));

    }
}
