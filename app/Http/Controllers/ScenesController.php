<?php


  // Route::post('/users/products/scenes', 'ScenesController@store');
  // Route::get('/users/products/scenes', 'ScenesController@show');

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Scene;
use App\product;

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

  public function show($id){
    $scenes = Scene::where('product_id',$id)->orderBy('scene_number', 'ASC')->get();
    $title = Product::find($id);
    return view('products.scenes')->with(array(
                                          'scenes' => $scenes,
                                          'title' => $title));
  }


}
