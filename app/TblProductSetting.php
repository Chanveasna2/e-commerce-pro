<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblProductSetting extends Model
{
    //
    protected $fillable=[
        'pro_id',
        'type_id',
        'item_id',
        'ind',
        'inactive'
    ];

    public function products(){
        return $this->belongsTo('App\TblProduct','pro_id');
    }

    public function type(){
        return $this->belongsTo('App\TblSettingType','type_id');
    }

    public function item(){
        return $this->belongsTo('App\TblSettingItem','item_id');
    }
}
