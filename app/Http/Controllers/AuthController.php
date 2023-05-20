<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    private $px;
    function __construct(){
      $this->px=DB::getTablePrefix();
    }
    
    public function auth(Request $f){

        $username=$f->txtUsername;
        $password=$f->txtPassword;  


          $c_username=$f->username;
          $c_password=$f->password;  
        
        
        
       // $px=DB::getTablePrefix();

        // dd($f->all());
       $u=DB::select("select * from {$this->px}users where (username='$username' or email='$username') and password='$password'");   
       $v=DB::select("select * from {$this->px}customers where (mobile='$c_username' or email='$c_username' or name='$c_username') and password='$c_password'");   
      // print_r($v);
       if(count($u)==1){             

          $session_id=session()->getId(); 
          session(['sess_id'=>$session_id,
                   'sess_user_id'=>$u[0]->id,
                   'sess_user_name' =>$u[0]->username,
                   'sess_email'=>$u[0]->email,
               
                   ]);
                   
          return Redirect::route('home');

      }else{
        // return redirect("/admin");
        // echo "Username or Password is incorrect";  
      }

       if(count($v)==1){             

          $c_session_id=session()->getId(); 
          // echo $c_session_id;
             session(['c_sess_id'=>$c_session_id,
                   'sess_custmer_id'=>$v[0]->id,
                   'sess_customer_name' =>$v[0]->name,
                   'sess_customer_email'=>$v[0]->email,
                   'sess_customer_mobile'=>$v[0]->mobile,
                   'sess_customer_postcode'=>$v[0]->postcode,
                   'sess_customer_city'=>$v[0]->city,
                   'sess_customer_country_id'=>$v[0]->country_id,
                   'sess_customer_apartment'=>$v[0]->apartment,
                   'sess_customer_street_address'=>$v[0]->street_address,
                   'sess_customer_password'=>$v[0]->password,
               
                   ]);
                   
        return Redirect::route('/');

     }else{
       // return redirect("/");
        // echo "Username or Password is incorrect";  
     }
        
      // return Redirect::route('home');
     }

     public function logout(){
        session()->forget(['sess_id', 'sess_user_id','sess_user_name','sess_email','sess_role_name']);
        session()->flush();
        session()->regenerate();  
        return redirect("/admin");    
      }
     public function c_logout(){
        session()->forget(['c_sess_id', 'sess_custmer_id','sess_customer_name','sess_customer_email']);
        session()->flush();
        session()->regenerate();  
        return redirect("/");    
      }

}
