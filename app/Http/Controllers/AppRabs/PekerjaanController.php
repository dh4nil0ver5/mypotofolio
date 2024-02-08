<?php

namespace App\Http\Controllers\AppRabs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pekerjaan; 
use Auth;

class PekerjaanController extends Controller
{
    //
    //
    public function index(){
        $username = Auth::user();
        if ($username == null) {
            # code...
            return redirect('login');
        }else{
            return view('app_rab.pages.index'); 
        }
    }
    public function load_data(){
        $data = Pekerjaan::getData();
        if($data){
            return json_encode(array('status'=>200, 'data'=>[])); 
        }else{
            return json_encode(array('status'=>400, 'data'=>$data));  
        }
    }
}
