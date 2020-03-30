<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class TaskController extends Controller
{
    public function rectangleNum(){
        $data[ ] = [ ];
        for($i = 1; $i< 101; $i++){
        $rectNum = ($i *($i+1)) ;
        $data[ ] = $rectNum ;
    }      
        return response()->json($data);
    }
    
}


