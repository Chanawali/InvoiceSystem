<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\contact;
use App\item;
use App\estimate;
use App\estimate_item;

class DocController extends Controller
{
    public function display(Request $req)
    {
        //return view('user.userpages.doc.estimatedoc');
      /* $estimate= DB::table('estimates')
        ->join('contacts','estimates.companyid','=','contacts.id')
        ->select('estimates.*','contacts.company')
        ->where('estimates.id',$req)
        ->get();
        //return view('user.userpages.doc.estimatedoc', compact('data'));
        return view('user.userpages.doc.estimatedoc', ['est'=>$estimate]); */

        $estimate = estimate::find($req);
      echo '<pre>';
        print_r($estimate);
       echo '</pre>';
       exit();
      // return view('user.userpages.doc.estimatedoc', ['est'=>$estimate]);
    }  
}
