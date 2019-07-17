<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable [
    	'idOder','address','phone'
    ];
    public function User(){
    	return $this->belongsto('App\Http\Models\User','idUser','id');
    }
}
