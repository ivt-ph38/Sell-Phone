<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status'
    ];
    public function orders (){
        return $this->hasMany('App\Order');
    }
}
