<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cut;

class CutsController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
    Cut::create(
      array(
        'cut_number' => $request->cut_number
      )
    );
    return redirect('/users/products/scenes/cuts');
  }

  public function show($id){
    $cuts = Cut::where('scene_id',$id)->orderBy('cut_number', 'ASC')->get();
    return view('products.cuts')->with('cuts', $cuts);
  }

}
