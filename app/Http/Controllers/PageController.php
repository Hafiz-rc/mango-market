<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

      return view('pages.site.index');
    }
    public function register() {

      return view('pages.site.registration');
    }

    public function products() {
        // Logic for displaying product listings
    }

    public function productDetails($id) {
        // Logic for displaying a specific product's details
    }

        public function cart() {
        $c_sess_id=session('c_sess_id');
       if(!isset($c_sess_id))return redirect('/login');  

        return view("pages.site.cart");
    }

    public function checkout() {
           $c_sess_id=session('c_sess_id');
			if(!isset($c_sess_id))return redirect('/login');  
        return view("pages.site.checkout");
    }
}
