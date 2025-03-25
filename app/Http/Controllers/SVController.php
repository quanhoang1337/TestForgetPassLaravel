<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapSV;
use Illuminate\Http\Request;

class SVController extends Controller
{
    //
    public function sv(){
        return view("formnhapsv");
    }

    public function sv_store(RuleNhapSV $request){
       
    }
}
