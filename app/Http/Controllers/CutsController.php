<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cut;

class CutsController extends Controller
{
    public function store(Request $request){
    Cut::create(
      array(
        'cut_number' => $request->cut_number
      )
    );
    return redirect('/users/products/scenes/cuts');
  }

  public function show(){
    $cuts = Cut::all();
    return view('products.cuts')->with('cuts', $cuts);
  }
}
