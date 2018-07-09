<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cut;
use App\Scene;
use App\Product;

class CutsController extends Controller
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

    public function store($id, Request $request){

// バリデーション
// 半角数字以外の場合・空白の場合をエラー
   $this->validate($request, [
        'cut_number' => 'required|numeric'
    ]);
//

    Cut::create(
      array(
        'cut_number' => $request->cut_number,
        'scene_id' => $id
      )
    );
    return redirect("/users/products/scenes/{$id}");
  }

  public function show($id){
    $cuts = Cut::where('scene_id',$id)->orderBy('cut_number', 'ASC')->get();
    $nav_scene = Scene::find($id);
    $title = Product::find($nav_scene->product_id);
    return view('products.cuts')->with(array('cuts' => $cuts,
                                             'nav_scene' => $nav_scene,
                                             'title' => $title,
                                             'id' => $id
                                         ));
  }

}
