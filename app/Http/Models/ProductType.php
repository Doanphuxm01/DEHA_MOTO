<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table ='product_types';
    protected $fillable = [
        'idCategory', 'name', 'slug','status',
    ];
    public function Category(){
    	return $this->belongsto('App\Http\Models\Category','idCategory','id');
    }
}
