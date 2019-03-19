<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\taxgroup;
use App\tax;

class TaxController extends Controller
{
    public function viewtaxgroup(Request $req)
    {
        //return view('user.userpages.tax.taxgroup');
        $data = taxgroup::all()->toArray();
        return view('user.userpages.tax.taxgroup', compact('data'));
    }

    public function inserttaxgroup(Request $req)
    {
        //dd($req->fname,$req->status);
        $taxgroup = new taxgroup();
        $taxgroup->taxgroup = $req->taxgroup;

        $taxgroup->save();
        //alert('Data is successfully added');
        //return view('user.userpages.tax.taxgroup');
        $data = taxgroup::all()->toArray();
        return view('user.userpages.tax.taxgroup', compact('data'));
    }

    public function viewid($id)
    {
       // return $contact_id;
      $tax = taxgroup::find($id);
     /*  echo '<pre>';
        print_r($contact);
       echo '</pre>';
       exit();*/
       return view('user.userpages.tax.tax', ['tax'=>$tax]);
    }

    public function inserttax(Request $req)
    {
        //dd($req->fname,$req->status);
        $tax = new tax();
        $tax->group_id = $req->group_id;
        $tax->tax_name = $req->tax_name;
        $tax->percentage = $req->percentage;

        $tax->save();
        //alert('Data is successfully added');
        //return view('user.userpages.tax.tax');
        return redirect('/viewtaxgroup');
    }

}
