<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\login;
use App\registeration;

class LoginController extends Controller
{
    public function viewlogin()
    {
        return view('basic.login');
    }
    public function login(Request $req)
    {
       // dd($req->username,$req->password);
      $employeid = $req->input('employeeid');
      //$password = $req->input('password');
      $password = md5($req->input('password'));

      $checkLogin1 = DB::table('logins')->where(['employeeid'=>$employeid,'password'=>$password, 'role'=>'admin','status'=>'1'])->get();
      $checkLogin2 = DB::table('logins')->where(['employeeid'=>$employeid,'password'=>$password, 'role'=>'user','status'=>'1'])->get();
      if(count($checkLogin1)  >0)
      {
        return view('admin.adminpages.admindashboard');
       //echo "Login SuccessFull<br/>";;
      }
      else if(count($checkLogin2)  >0)
        {
            return view('user.userpages.userdashboard');
        // echo " user Login SuccessFull<br/>";;
        }
      else
      {
       echo "Login Faield Wrong Data Passed";
      }
    }
}
