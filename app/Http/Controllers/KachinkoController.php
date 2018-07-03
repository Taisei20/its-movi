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

    $take_number = Take::where('cut_id', $id)->orderBy('take_number', 'DESC')->first()->take_number;

    Take::create(
      array(
        'take_number' => $take_number + 1,
        'judge' => $request->judge,
        'memo' => $request->memo,
        'cut_id' => $id
      )
    );

    return redirect("/users/products/scenes/cuts/{$id}/kachinko");
  }

  public function show($id){
    $cut = Cut::find($id);
    $scene = Scene::find($cut->scene_id);
    $product = Product::find($scene->product_id);
    $take = Take::where('cut_id', $id)->orderBy('take_number', 'DESC')->first();

    return view('products.kachinko')->with(array('product' => $product, 'scene' => $scene, 'cut' => $cut, 'take' => $take));
  }
}
