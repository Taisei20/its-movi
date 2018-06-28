<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Take;

class TakesController extends Controller
{
  public function show(){
    $takes = Take::all();
    return view('products.takes')->with('takes', $takes);
  }
}
