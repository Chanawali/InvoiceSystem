<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\contact;
use DB;

class ContactController extends Controller
{
    public function viewcontact()
    {
        //return view('user.userpages.contacts.viewcontact');
        $data = contact::all()
        ->where('status',1)
        ->toArray();
        return view('user.userpages.contacts.viewcontact', compact('data'));
    }

    public function viewaddcontact()
    {
        return view('user.userpages.contacts.addcontact');
    }

    public function insert(Request $req)
    {
        //dd($req->fname,$req->status);
        $contact = new contact();
        $contact->type = $req->type;
        $contact->company = $req->company;
        $contact->fname = $req->fname;
        $contact->lname = $req->lname;
        $contact->mobile = $req->mobile;
        $contact->phone = $req->phone;
        $contact->emailid = $req->emailid;
        $contact->bill_building = $req->bill_building;
        $contact->bill_street = $req->bill_street;
        $contact->bill_area = $req->bill_area;
        $contact->bill_city = $req->bill_city;
        $contact->ship_building = $req->ship_building;
        $contact->ship_street = $req->ship_street;
        $contact->ship_area = $req->ship_area;
        $contact->ship_city = $req->ship_city;
        $contact->status = $req->status;
        $contact->save();

        //alert('Data is successfully added');
        return view('user.userpages.contacts.addcontact');
    }

    public function detailview($id)
    {
       //return $id;
      $contact = contact::find($id);
      /* echo '<pre>';
        print_r($contact);
       echo '</pre>';
       exit();*/
       return view('user.userpages.contacts.displaycontact', ['contact'=>$contact]);
    }

    public function edit($id)
    {
       // return $contact_id;
       $contact = contact::find($id);
     /*  echo '<pre>';
        print_r($contact);
       echo '</pre>';
       exit();*/
       return view('user.userpages.contacts.editcontact', ['contact'=>$contact]);
    }

    public function update(Request $req, $id)
    {
       $value = array(
        'type' => $req->type,
        'company' => $req->company,
        'fname' => $req->fname,
        'lname' => $req->lname,
        'mobile' => $req->mobile,
        'phone' => $req->phone,
        'emailid' => $req->emailid,
        'bill_building' => $req->bill_building,
        'bill_street' => $req->bill_street,
        'bill_city' => $req->bill_city,
        'ship_building' => $req->ship_building,
        'ship_street' => $req->ship_street,
        'ship_area' => $req->ship_area,
        'ship_city' => $req->ship_city,
        'status' => $req->status
       );
       contact::where("id",$id)->update($value);
       return redirect('/viewcontacts');
   }
   public function delete(Request $req,$id)
    {  //return $id;
        $value = array(
            'status' => $req->status
           );
           contact::where("id",$id)->update($value);
           return redirect('/viewcontacts');
   }

   public function viewtrash(Request $req)
    {
        $data = contact::all()->where('status',0)->toArray();
        return view('user.userpages.contacts.trashview', compact('data'));
    }

   public function restore(Request $req,$id)
    {  //return $id;
        $value = array(
            'status' => $req->status
           );
           contact::where("id",$id)->update($value);
           return redirect('/viewcontacts');
   }
}