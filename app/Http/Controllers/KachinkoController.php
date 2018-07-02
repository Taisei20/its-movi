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
  // public function create(){
  //     return view('products.kachinko');
  // }

  public function store($id, Request $request){
    //dd($id);
    Take::create(
      array(
        'take_number' => $request->take_number,
        'judge' => $request->judge,
        'memo' => $request->memo,
        'cut_id' => $id
      )
    );
    //return view('products.kachinko');
    return redirect("/users/products/scenes/cuts/{$id}/kachinko");
  }

  public function show($id){
    $cut = Cut::find($id);
    $scene = Scene::find($cut->scene_id);
    $product = Product::find($scene->product_id);

    return view('products.kachinko')->with(array('product' => $product, 'scene' => $scene, 'cut' => $cut));
  }
}
