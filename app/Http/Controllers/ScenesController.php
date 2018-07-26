<?php


  // Route::post('/users/products/scenes', 'ScenesController@store');
  // Route::get('/users/products/scenes', 'ScenesController@show');

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Scene;
use App\Product;
use App\User;
use Auth;
use Image;

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

  public function store($id, Request $request){

// バリデーション
// 半角数字以外の場合・空白の場合をエラー
    $this->validate($request, [
        'scene_number' => 'required|numeric'
    ]);

// デフォルトの位置情報設定
   $lng = 139.7398508;
   $lat = 35.6254073;
//

    Scene::create(array(
                  'scene_number' => $request->scene_number,
                  'product_id' => $id,
                  'lng' => $lng,
                 'lat' => $lat
                  ));
    return redirect("/users/products/{$id}");
  }

  public function show($id){
    $scenes = Scene::where('product_id',$id)->orderBy('scene_number', 'ASC')->get();
    $title = Product::find($id);
    return view('products.scenes')->with(array(
                                          'scenes' => $scenes,
                                          'title' => $title,
                                          'id' => $id
                                        ));
  }

// シーン情報ページの表示
  public function show_info($id){
    $Scene_info = Scene::find($id);

// ヘッダー表示用の情報取得
    $nav_scene = Scene::find($id);
    $title = Product::find($nav_scene->product_id);

    return view('products.scene_info')->with(array(
                                          'Scene_info' => $Scene_info,
                                          'title' => $title
                                          ));
    }


    public function edit($id){
      $scene = Scene::find($id);
// ヘッダー表示用の情報取得
      $title = Product::find($scene->product_id);

      return view('products.scenes_edit')->with(array(
                                          'scene' => $scene,
                                          'title' => $title
      ));
    }

    public function destroy($id) {
      $product_id = Scene::find($id)->product_id;
      Scene::destroy($id);
      return redirect("/users/products/{$product_id}");
    }

    public function alart($id){
      $scene = Scene::find($id);
// ヘッダー表示用の情報取得
      $nav_scene = Scene::find($id);
      $title = Product::find($nav_scene->product_id);
      return view('products.delete')->with(array(
                                         'scene' => $scene,
                                         'title' => $title
      ));
    }

    public function update($id, Request $request){
    $this->validate($request, [
        'scene_number' => 'required|numeric',
        'image' => 'image'
    ]);

    if($request->image){
      $fileName = $request->image->getClientOriginalName();
      Image::make($request->image)->save(public_path().'/assets/images/'.$fileName);
      Scene::find($id)->update(
                    array(
                          'image'        => $fileName,
                          ));
    }

    Scene::find($id)->update(array(
                          'scene_number' => $request->scene_number,
                          'place_name'   => $request->place_name,
                          'adress'       => $request->adress,
                          'memo'         => $request->memo,
                          'lat'          => $request->lat,
                          'lng'          => $request->lng,
                              ));
   return redirect("users/products/scenes/{$id}/info");
  }
}