<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class OderDetail extends Model
{
    protected $table = 'oder_details';
   protected $fillable = [
        'idOder', 'idProduct', 'quantity','pirce'
    ];
    public function Oder(){
    	return $this->belongsto('App\Http\Models\Oder','idOder','id');
    }
    public function Product(){
    	return $this->belongsto('App\Http\Models\product','idProduct','id');
    }
}
