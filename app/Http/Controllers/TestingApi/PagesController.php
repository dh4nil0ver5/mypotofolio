<?php

namespace App\Http\Controllers\TestingApi;

use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request; 
use App\Models\Sales;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PagesController extends BaseController { 

    //
    public function list(){ 
        return array("test"=>1);
    }
    
    public function purchasing(){ 
        $Sales = new Sales;
        $sales = Sales::get();
        if(count($sales) == 0){
            $sales=[];
        } 
        $success['token'] = Str::random(60); 
        $success['data'] = 
            [
                "id" => $sales->id,
                "brand" => $sales->brand,
                "volume" => $sales->volume,
                "profit" => $sales->profit
            ]
        ;
        $success['column_header'] = $Sales->getTableColumns();
        return $this->sendResponse($success, "ok"); 
    }
    
    public function chart(){
        return array("test"=>1);
    } 

}