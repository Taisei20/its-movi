<?php


  // Route::post('/users/products/scenes', 'ScenesController@store');
  // Route::get('/users/products/scenes', 'ScenesController@show');

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Scene;

class ScenesController extends Controller
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
    Scene::create(
      array(
        'scene_number' => $request->scene_number
      )
    );
    return redirect('/users/products/scenes');
  }

  public function show(){
    $scenes = Scene::all();
    return view('products.scenes')->with('scenes', $scenes);
  }



}
