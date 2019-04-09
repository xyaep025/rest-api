<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Todo;
use App\User;
use Auth;

class TodoController extends Controller
{
	public function index()
	{
	 $data = Todo::with('pembuat')->get();
	 return $data;
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'judul'			=>	'required',
		]);

		$todo = Todo::create([
			'judul'		=> $request->judul,
			'user_id' => Auth::user()->id
		]);

		return response()->json([$todo],201);
	}

	public function find(Request $request, $id)
	{
		$todo = Todo::where('id',$id)->get();
		return $todo;
	}

	public function update(Request $request, $id)
	{
		$todo = Todo::find($id)->first();
		$this->validate($request,[
			'judul'		=> 'required',
			'tujuan'	=> 'required'
		]);

		$todo->judul = $request->judul;
		$todo->tujuan = $request->tujuan;
		$todo->update();

		return 'sukses update';
	}

	public function destroy(Request $resuest, $id)
	{
		$todo = Todo::find($id)->first();
		$todo->delete();
		return 'sukses';
	}
}
