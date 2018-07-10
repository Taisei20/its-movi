<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\User;
use App\Product;
use App\Scene;
use Auth;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */

 // share機能の作品一覧ページ表示(end_flag = 1のみ)・作品情報取得
    public function users_share($id){
    // 監督の作品一覧取得
        $products = Product::where('user_id', $id)->where('end_flag', '1')->get();
        return view('users.share')->with('products', $products);
    }

  //  share機能の作品詳細ページ表示・作品詳細表示
    public function products_share($id){
    // shareページで選択した作品の詳細情報表示
        $dtlProduct = Product::find($id);
    // map上に表示する位置情報の取得
        $locations = Scene::where('product_id',$id)->get();
      return view('products.share')->with(array(
                                          'dtlProduct' => $dtlProduct,
                                          'locations'  => $locations
                                          ));
    }

}
