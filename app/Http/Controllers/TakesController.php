<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Take;

class TakesController extends Controller
{
  public function create(){
      return view('products.takes');
  }

  public function store(Request $request){
    Take::create(
      array(
        'take_number' => $request->take_number,
        'judge' => $request->judge
      )
    );
    return view('products.takes');
  }
}
