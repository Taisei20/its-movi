<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Scene;
use App\Cut;
use App\Take;

class TakesController extends Controller
{
  public function create(){
      return view('products.kachinko');
  }

  public function store(Request $request){
    Take::create(
      array(
        'cut_id' => $request->cut_id,
        'take_number' => $request->take_number,
        'judge' => $request->judge,
        'memo' => $request->memo
      )
    );
    return view('products.kachinko');
  }

  public function show(){

  }
}
