<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\product_category;
use App\Models\site_section;
use App\Models\SiteMenu;
use PDO;

class HomeController extends Controller
{
    function index(){
//         
//      

//     return view("pages.erp.dashboard");
       return view("pages.erp.login");
    }
    function home(){
        $sess_id=session('sess_id');
      if(!isset($sess_id))return redirect('/admin');
        return view("pages.erp.dashboard");
    }
    function site(){
        
        $products=Product::all();
        $menus=SiteMenu::all();
        return view("pages.site.home",["products" => $products,"menus"=>$menus]);
    }
    function help(){
        return view("pages.site.help");
    }
    function contact(){
        
        return view("pages.site.contact");
    }
    function blog(){
        
        return view("pages.site.blog");
    }
    function blog_details(){
        
        return view("pages.site.blog_details");
    }

    function about(){
       // echo "<h1>Name:".$name.", Age:".$age."</h>";
       return view("pages.site.about");
    }
    function shop(){
        
        return view("pages.site.shop");
    }
    function account(){
        
        return view("pages.site.account");
    }
    function wishlist(){
        
        return view("pages.site.wishlist");
    }
}
