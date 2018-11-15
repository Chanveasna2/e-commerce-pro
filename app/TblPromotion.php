<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblPromotion extends Model
{
    //
    protected $fillable=[
        'promo_name',
        'promo_image',
        'promo_expired',
        'ind',
        'inactive'
    ];
}
