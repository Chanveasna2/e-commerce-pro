<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblSettingType extends Model
{
    //
    protected $fillable=[
        'type_name',
        'ind',
        'inactive'
    ];
}
