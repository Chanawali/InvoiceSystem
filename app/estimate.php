<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estimate extends Model
{
    protected $fillable=['estimateid','type','companyid','customer','estdate'];
}
