<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblMainCategory extends Model
{
    //
    protected $fillable=[
        'mainCat_name',
        'ind',
        'inactive',
    ];
}
