<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\User;
use App\Product;
use Auth;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */

 // share機能の作品一覧ページ表示・作品情報取得
    public function users_share($id){
        return view('users.share');
    }

  //  share機能の作品詳細ページ表示・作品詳細表示
    public function products_share($id){
      return view('products.share');
    }

}
