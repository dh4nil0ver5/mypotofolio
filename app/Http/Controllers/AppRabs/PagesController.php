<?php

namespace App\Http\Controllers\AppRabs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    { 
        return view('app_rab.welcome');
    }
    public function pekerjaan(){ 
        return view('app_rab.setting_master.pekerjaan');
    }
    public function sub_pekerjaan(){
        $data = DB::table('tdmasterwork')->where("status", 1)->get();
        $session = array("menu"=>"menu-is-opening menu-open");
        return view('app_rab.setting_master.sub_pekerjaan', compact('data','session')); 
    }
    public function item_pekerjaan(){ 
        return view('app_rab.setting_master.item_pekerjaan'); 
    } 
    public function material($offset=null, $lim=null){  
        $offset=(!$offset?0:$offset);
        $lim=(!$lim?5:$lim);
        $data = DB::select(
            "SELECT 
                a.`id_category` AS name_category,
                b.`id_item`
                FROM `tdformula` b
                JOIN `tdcategoryformula` a ON b.`id_categoryformula`=a.`id_category`
                JOIN `tditemwork` c ON c.`id_item`=b.`id_item`
                LIMIT $offset,$lim"
        ); 
        $session = array("menu"=>"menu-is-opening menu-open");
        $tdkindofraw = DB::table('tdkindofraw')->get();
        $tdmasterkoefisien = DB::table('tdmasterkoefisien')->get();
        $tb_domisili_kabkot = DB::table('tb_domisili_kabkot')->get(); 
        return view('app_rab.setting_master.material', compact('data', 'session', 'tdkindofraw', 
            'tdmasterkoefisien','tb_domisili_kabkot')); 
    }
    public function formula($offset=null, $lim=null){  
        $offset=(!$offset?0:$offset);
        $lim=(!$lim?5:$lim);
        $data = DB::select(
            "SELECT 
                a.`id_category` AS name_category,
                b.`id_item`
                FROM `tdformula` b
                JOIN `tdcategoryformula` a ON b.`id_categoryformula`=a.`id_category`
                JOIN `tditemwork` c ON c.`id_item`=b.`id_item`
                LIMIT $offset,$lim"
        ); 
        $session = array("menu"=>"menu-is-opening menu-open");
        $tdkindofraw = DB::table('tdkindofraw')->get();
        $tdmasterkoefisien = DB::table('tdmasterkoefisien')->get();
        $tditemwork = DB::table('tditemwork')->get();
        $category = DB::table('tdcategoryformula')->get();
        $tb_domisili_kabkot = DB::table('tb_domisili_kabkot')->get();  
        return view('app_rab.pages.formula', compact('data', 'session', 'tdkindofraw', 
        'tdmasterkoefisien','tb_domisili_kabkot', 'category', 'tditemwork'));
    }
}
