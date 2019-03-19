<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estimate_item extends Model
{
    protected $fillable=['estimateid','itemcode','quantity','rate','amount','discount','total'];
}
