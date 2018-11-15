<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblSettingItem extends Model
{
    //
    protected $fillable=[
        'item_name',
        'ind',
        'inactive',
        'type_id'
    ];

    public function settingType(){
        return $this->belongsTo('App\TblSettingType','type_id');
    }
}
