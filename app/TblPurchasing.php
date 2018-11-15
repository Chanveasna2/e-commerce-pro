<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblPurchasing extends Model
{
    //
    protected $fillable=[
        'pro_id',
        'qty',
        'user_id'
    ];

    public function products(){
        return $this->belongsTo('App\TblProduct','pro_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
