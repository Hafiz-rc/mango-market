<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    function sum($a,$b){
       // echo "Sum:".($a+$b);
       return view("result",["a"=>$a,"b"=>$b,"label"=>"Sum:","operator"=>"+"]);
    }
    function sub($a,$b){
        //echo "Sub:".($a-$b);
        return view("result",["a"=>$a,"b"=>$b,"label"=>"Sub:","operator"=>"-"]);
    }
    function mul($a,$b){
        //echo "Multiplication:".($a*$b);
        return view("result",["a"=>$a,"b"=>$b,"label"=>"Multiplication:","operator"=>"*"]);
    }
    function div($a,$b){
        //echo "Division:".($a/$b);
        return view("result",["a"=>$a,"b"=>$b,"label"=>"Division:","operator"=>"/"]);
    }
}
