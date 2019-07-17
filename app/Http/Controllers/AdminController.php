<?php

namespace App\Http\Controllers;
use App\Http\Models\product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.pages.index');
    	
    }
    // public function list(){
    // 	$product = product::all();
    // 	return view('admin.pages.Product.table',['product'=>$product]);
    // }
}
