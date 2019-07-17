<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    protected $table = 'Oder';
    protected $fillable =[
    	'code_order','idUser','name','addresss','email','phone','monney','message','status'
    ];
    public function User(){
    	return $this ->belongsto('App\Http\Models\User','idUser','id');
    }
}
