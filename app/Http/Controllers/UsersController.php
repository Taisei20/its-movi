<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\User;
use Auth;

class UsersController extends Controller
{
    public function index(){
      $user = Auth::user();
      return view('users.mypage')->with('user',$user);
    }
}
