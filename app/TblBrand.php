<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblBrand extends Model
{
    //
    protected $fillable=[
        'brand_name',
        'logo',
        'inactive'
    ];
}
