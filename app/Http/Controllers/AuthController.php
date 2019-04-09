<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{

	public function Register(Request $request)
	{
		$this->validate($request,[
			'nama'		=> 'required|min:8',
			'email'		=> 'required|unique:users|email',
			'username'	=> 'required|unique:users',
			'password'	=> 'required|min:8'
		]);

		$user = User::create([
			'nama'		=> $request->nama,
			'email'		=> $request->email,
			'username'	=> $request->username,
			'password'  => Hash::make($request->password)
		]);

		return response()->json([$user],201);
	}

	public function Login(Request $request)
	{
		$email = $request->email;
		$password = $request->password;
		$user = User::where('email', $email)->first();
		if (Hash::check($password, $user->password)) {
			$api_token = str_random(5);
			$user->update([
				'api_token' => $api_token
			]);
			return response()->json([
						'api'				=>  $api_token,
						'user'			=>  $user
					]);
		} else {
			return 'gagal';
		}
	}

}
