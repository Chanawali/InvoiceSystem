<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\registration;
use App\login;


class RegisterController extends Controller
{
    public function viewregister()
    {
        return view('admin.adminpages.registration');
    }  

    public function insert(Request $req)
    {
        //dd($req->fname,$req->status);
        $register = new registration();
        $register->employeeid = $req->employeeid;
        $register->fname = $req->fname;
        $register->lname = $req->lname;
        $register->phonenumber = $req->phonenumber;
        $register->email_id = $req->email_id;
        $register->role = $req->role;
        $register->save();

        $login = new login();
        $login->employeeid = $req->employeeid;
        $login->password = md5($req->password);
        $login->role = $req->role;
        $login->status = $req->status;
        $login->save();
        
        //alert('Data is successfully added');
        return view('admin.adminpages.registration');
    }
    
}
