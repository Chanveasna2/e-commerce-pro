<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblProduct extends Model
{
    //
    protected $fillable=[
        'pro_name',
        'pro_code',
        'mainCat_id',
        'category_id',
        'brand_id',
        'prices',
        'pro_desc',
        'pro_image',
        'ind',
        'inactive'
    ];

    public function mainCat(){
        return $this->belongsTo('App\TblMainCategory','mainCat_id');
    }

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function brand(){
        return $this->belongsTo('App\TblBrand','brand_id');
    }
}
