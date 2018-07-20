<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Take;
use App\Product;
use App\Scene;
use App\Cut;

class TakesController extends Controller{
  public function show($id){
    $cut = Cut::find($id);
    $takes = Take::where('cut_id', $id)->orderBy('take_number', 'ASC')->get();
    $nav_cut = Cut::find($id);
    $nav_scene = Scene::find($nav_cut->scene_id);
    $title = Product::find($nav_scene->product_id);
    return view('products.takes')->with(array(
                                          'cut' => $cut,
                                          'takes' => $takes,
                                          'title' => $title,
                                          'nav_scene' => $nav_scene,
                                          'nav_cut' => $nav_cut));
  }

  public function edit($id){
    $take = Take::find($id);

// ヘッダー表示用情報取得
    $nav_cut = Cut::find($take->cut_id);
    $nav_scene = Scene::find($nav_cut->scene_id);
    $title = Product::find($nav_scene->product_id);
//

    return view('products.takes_edit')->with(array(
                                          'take' => $take,
                                          'title' => $title,
                                          'nav_scene' => $nav_scene,
                                          'nav_cut' => $nav_cut));
  }


  public function update($id, Request $request){
    $take = Take::find($id);
    $take->update(
      array(
        'judge' => $request->judge,
        'memo' => $request->memo
      )
    );

    return redirect("/users/products/scenes/cuts/{$take->cut_id}");
  }

}
