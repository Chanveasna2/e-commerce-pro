<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblOrdering extends Model
{
    //
    protected $fillable=[
        'pro_id',
        'qty',
        'total',
        'user_id',
        'user_address',
        'user_phone',
        'ind',
        'inactive'
    ];

    public function products(){
        return $this->belongsTo('App\TblProduct','pro_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
