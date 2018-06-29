<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Take;

class TakesController extends Controller
{
  public function show($id){
    $takes = Take::where('cut_id', $id)->orderBy('take_number', 'ASC')->get();
    return view('products.takes')->with('takes', $takes);
  }
}
