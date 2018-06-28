<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Auth;

class ProductsController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $products = Product::where('user_id', Auth::user()->id)->get();
      return view('users.mypage')->with('products', $products);
    }

    public function create(){
      return view('products.create');
    }

    public function store(Request $request){
      $product = Product::create(
                    array(
                          'user_id'   => Auth::user()->id,
                          'title'     => $request->title,
                    ));
      return redirect('/users');
    }


}
