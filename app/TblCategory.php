<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblCategory extends Model
{
    //
    protected $fillable=[
        'category_name',
        'mainCat_id',
        'ind',
        'inactive'
    ];

    public function mainCategory(){
        return $this->belongsTo('App\TblMainCategory','mainCat_id');
    }
}
