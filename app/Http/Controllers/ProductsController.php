<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Request;

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

    public function create(){
      return view('products.create');
    }

    public function store(Request $request){
      $product = Product::create(
                    array(
                          'user_id'   => Auth::user()->id;
                          'title'     => $request->title;
                    ));
      return redirect('/users');
    }


}
