<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    	protected $table ='articles';
    	// lay tat ca noi dung trong bang
     	protected $fillable = ['title', 'body'];
     	// lay tat ca cac truong trong bang
}
