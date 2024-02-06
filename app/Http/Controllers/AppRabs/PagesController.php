<?php

namespace App\Http\Controllers\AppRabs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('app_rab.welcome');
    }
}
