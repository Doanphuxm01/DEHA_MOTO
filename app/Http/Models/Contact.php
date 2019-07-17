<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable =[
    	'idUser','message'
    ];
    public function User(){
    	return $this ->belongsto('App\Http\Models\User','idUser','id');
    }
}
