<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Auth;
use Image;

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

// バリデーション 空白の場合を入力無効
     $this->validate($request, [
                        'title' => 'required'
                     ]);

      $fileName = $request->image->getClientOriginalName();
      Image::make($request->image)->save(public_path().'/assets/images/'.$fileName);

      Product::create(
                    array(
                          'user_id'   => Auth::user()->id,
                          'title'     => $request->title,
                          'story'     => $request->story,
                          'comment'   => $request->comment,
                          'image'     => $fileName,
                    ));

      return redirect('/users/products');
    }


}
