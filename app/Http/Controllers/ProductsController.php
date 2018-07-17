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
    // 作品情報の登録
     if($request->image){
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
     } else {
      Product::create(
                    array(
                          'user_id'   => Auth::user()->id,
                          'title'     => $request->title,
                          'story'     => $request->story,
                          'comment'   => $request->comment,
                    ));
     }
      return redirect('/users/products');
    }


    public function edit($id){
    // 作品情報の編集画面表示
      $product = Product::find($id);
      return view('products.edit')->with('product', $product);
    }


    public function update($id, Request $request){

    // バリデーション 空白の場合を入力無効
     $this->validate($request, [
                        'title' => 'required'
                     ]);
    // 
     if($request->image){
      $fileName = $request->image->getClientOriginalName();
      Image::make($request->image)->save(public_path().'/assets/images/'.$fileName);

      Product::find($id)->update(
                    array(
                          'image'        => $fileName,
                          ));
    }
     // 作品情報の更新
      Product::find($id)->update(
                    array(
                          'title'        => $request->title,
                          'story'        => $request->story,
                          'url'          => $request->url,
                          'comment'      => $request->comment,
                          'running_time' => $request->running_time,
                          ));
      return redirect("/users/products/share/$id");
    }


}
