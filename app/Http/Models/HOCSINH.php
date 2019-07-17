<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class HOCSINH extends Model
{
    protected $table = 'HOC_SINH';
    protected $fillable = ['hoten','toan','ly','hoa'];
    public $timestamps = false;
}
