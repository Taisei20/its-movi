<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Scene;
use App\Cut;
use App\Take;

class KachinkoController extends Controller
{

  public function store($id, Request $request){

// バリデーション
// 空白の場合にはいらない
   $this->validate($request, [
        'judge' => 'required',
        'lng' => 'required',
        'lat' => 'required'
    ]);
//

    $take_number = Take::where('cut_id', $id)->get()->count();
    if(!$take_number){
      $take_number = 0;
    }

    Take::create(
      array(
        'take_number' => $take_number + 1,
        'judge' => $request->judge,
        'memo' => $request->memo,
        'cut_id' => $id
      )
    );

    // 位置情報をDBに保存
    if( $request->lng != 0 || $request->lat != 0){
      $cut = Cut::find($id);
      Scene::find($cut->scene_id)->update(
        array(
          'lng' => $request->lng,
          'lat' => $request->lat
        )
      );
    }


    return redirect("/users/products/scenes/cuts/{$id}/kachinko");
  }


  public function show($id){
    $cut = Cut::find($id);
    $scene = Scene::find($cut->scene_id);
    $product = Product::find($scene->product_id);
    $take_number = Take::where('cut_id', $id)->get()->count();
    if(!$take_number){
      $take_number = 0;
    }

    return view('products.kachinko')->with(array('product' => $product, 'scene' => $scene, 'cut' => $cut, 'take_number' => $take_number));
  }
}
