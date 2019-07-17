<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table ='product';
    protected $fillable = [
        'name', 'slug', 'description','quantity','price','promotional','idCategory','idProductType','status'
    ];
    public function Category(){
    	return $this->belongsto('App\Http\Models\Category','idCategory','id');
    }
    public function ProductType(){
    	return $this->belongsto('App\Http\Models\ProductType','idProductType','id');
    }

}
