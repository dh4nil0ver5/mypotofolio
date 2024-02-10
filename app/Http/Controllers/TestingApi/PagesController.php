<?php

namespace App\Http\Controllers\TestingApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;  

class PagesController extends Controller
{ 

    //
    public function list(){ 

        return array("test"=>1);
    }
    
    public function purchasing(){
        return array("test"=>1);
    }
    
    public function chart(){
        return array("test"=>1);
    } 

}