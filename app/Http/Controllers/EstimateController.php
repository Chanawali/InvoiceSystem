<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\estimate;
use App\contact;
use App\item;
use App\estimate_item;
use DB;


class EstimateController extends Controller
{
    public function viewestimate(Request $req)
    {
        //return view('user.userpages.estimate.viewestimate');
        $data = estimate::all()->toArray();
        return view('user.userpages.estimate.viewestimate', compact('data'));
    }
    public function viewaddestimate()
    {
        //return view('user.userpages.estimate.addestimate');
        $data1 = contact::all()->where('status',1)->toArray();
        $data2 = item::all()->where('status',1)->toArray();
        return view('user.userpages.estimate.addestimate', compact('data1','data2'));
    }

    public function insert(Request $req)
    {
        //return $req; //check if data is returned
        $data=$req->all();
        $lastid=estimate::create($data)->id;
        if(count($req->itemcode)>0)
        {
            foreach($req->itemcode as $item=>$v)
            {
                $data2=array(
                    'estimateid'=>$lastid,
                    'itemcode'=>$req->itemcode[$item],
                    'quantity'=>$req->quantity[$item],
                    'rate'=>$req->rate[$item],
                    'amount'=>$req->amount[$item],
                    'discount'=>$req->discount[$item],
                    'total'=>$req->total[$item]
                );
                estimate_item::insert($data2);
            }
            return redirect('/viewaddestimate');
        }
    }

    public function detailview($id)
    {
        //return view('user.userpages.doc.estimatedoc');
        $estimate=DB::table('estimates')
        ->Join('contacts', 'estimates.companyid', '=', 'contacts.id')
        ->Join('estimate_items', 'estimates.id', '=', 'estimate_items.estimateid')
        ->select('estimates.*','contacts.*','estimate_items.*')
        ->where('estimates.id','=',$id)
        ->first();

        $data = estimate_item::all()->where('estimateid',$id)->toArray();
    
        return view('user.userpages.doc.estimatedoc', ['est'=>$estimate],compact('data')); 
       
    }

}
