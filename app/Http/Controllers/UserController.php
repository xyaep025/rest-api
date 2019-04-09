<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Auth;
use App\User;

class UserController extends Controller
{

  public function me(Request $request)
  {
    $profile = Auth::user();
    return $profile;
  }

  public function search(Request $request, $nama)
  {
    $data = User::where('nama', $nama)->get();
		return $data;
  }

}
