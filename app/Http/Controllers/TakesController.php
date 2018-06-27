<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Take;

class TakesController extends Controller
{
  public function create(){
      return view('products.kachinko');
  }

  public function store(Request $request){
    Take::create(
      array(
        'take_number' => $request->take_number,
        'judge' => $request->judge
      )
    );
    return view('products.kachinko');
  }

  public function show(){
    $takes = Take::all();
    return view('products.takes')->with('takes', $takes);
  }
}
