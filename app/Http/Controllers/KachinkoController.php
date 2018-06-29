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
  public function create(){
      return view('products.kachinko');
  }

  public function store(Request $request){
    Take::create(
      array(
        'take_number' => $request->take_number,
        'judge' => $request->judge,
        'memo' => $request->memo
      )
    );
    return view('products.kachinko');
  }

  public function show(){
    $product = Product::find(1);
    $scene = Scene::find(1);
    $cut = Cut::find(1);

    return view('products.kachinko')->with(array('product' => $product, 'scene' => $scene, 'cut' => $cut));
  }
}
