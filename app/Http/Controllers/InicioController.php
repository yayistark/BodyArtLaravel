<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class InicioController extends Controller
{
    public function index(){

        return view('lista', ['products' => Product::paginate(1)]);
    }
}
