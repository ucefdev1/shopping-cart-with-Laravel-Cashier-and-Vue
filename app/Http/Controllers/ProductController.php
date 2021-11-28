<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //return all products as JSON
        return Product::with('categories:id,name')->get();

    }
}
