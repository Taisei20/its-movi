<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\User;
use App\Product;
use Auth;

class UsersController extends Controller
{
    public function index(){
      $products = Product::with('user');
      return view('users.mypage')->with(array(
                                        'products' => $products,));
    }
}
