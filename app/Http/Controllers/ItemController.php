<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\item;
use App\contact;

class ItemController extends Controller
{
    public function viewitem(Request $req)
    {
        $data = item::all()
        ->where('status',1)
        ->toArray();
        return view('user.userpages.items.viewitem', compact('data'));
    }
    public function viewadditems()
    {
        //return view('user.userpages.items.additem');
        $data = contact::all()
        ->where('type','supplier')
        ->where('status','1')
        ->toArray();
        return view('user.userpages.items.additem', compact('data'));
    }

    public function insert(Request $req)
    {
        //dd($req->fname,$req->status);
        $item = new item();
        $item->itemcode = $req->itemcode;
        $item->companyid = $req->companyid;
        $item->itemname = $req->itemname;
        $item->units = $req->units;
        $item->rate = $req->rate;
        $item->taxgroupid = $req->taxgroupid;
        $item->taxid = $req->taxid;
        $item->percentage = $req->percentage;
        $item->total = $req->total;
        $item->description = $req->description;
        $item->status = $req->status;
        $item->save();

        //alert('Data is successfully added');
        return redirect('/viewadditems');
    }

    public function detailview($id)
    {
       //return $id;
      $item = item::find($id);
      /* echo '<pre>';
        print_r($contact);
       echo '</pre>';
       exit();*/
       return view('user.userpages.items.displayitem', ['item'=>$item]);
    }

    public function edit($id)
    {
       // return $contact_id;
       $item = item::find($id);
     /*  echo '<pre>';
        print_r($contact);
       echo '</pre>';
       exit();*/
       return view('user.userpages.items.edititem', ['item'=>$item]);
    }

    public function update(Request $req, $id)
    {
       $value = array(
        'itemcode' => $req->itemcode,
        'companyid' => $req->companyid,
        'itemname' => $req->itemname,
        'units' => $req->units,
        'rate' => $req->rate,
        'taxgroupid' => $req->taxgroupid,
        'taxid' => $req->taxid,
        'percentage' => $req->percentage,
        'total' => $req->total,
        'description' => $req->description,
        'status' => $req->status,
       );
       item::where("id",$id)->update($value);
       return redirect('/viewitems');
   }
   public function delete(Request $req,$id)
    {  //return $id;
        $value = array(
            'status' => $req->status
           );
           item::where("id",$id)->update($value);
           return redirect('/viewitems');
   }

   public function viewtrash(Request $req)
    {
        $data = item::all()->where('status',0)->toArray();
        return view('user.userpages.items.trashview', compact('data'));
    }

   public function restore(Request $req,$id)
    {  //return $id;
        $value = array(
            'status' => $req->status
           );
           item::where("id",$id)->update($value);
           return redirect('/viewitems');
   }
}
