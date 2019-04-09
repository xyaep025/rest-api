<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;

class ProductController extends Controller
{



	public function index()
	{
		$data 	= Product::all();
		return $data;
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'kode_barang' => 'required|',
			'nama_barang' => 'required',
			'harga'	      => 'required',
			'foto'				=> 'required'
		]);

		if ($request->file('foto')) {
			$foto = $request->file('foto')->getClientOriginalName();
			$date = new Carbon();
			$d = $date->format('Y-m-d-').$foto;
			$destinationPath ="../resources/views/image";
		  $m =	$request->file('foto')->move($destinationPath, $d);
		}else{
			return 'null';
		}

		$data = Product::create([
			'nama_barang' => $request->nama_barang,
			'kode_barang' => $request->kode_barang,
			'harga'				=> $request->harga,
			'foto'				=> $request->foto = $d
		]);

		return response()->json([$data],201);
	}

		public function edit(Request $request, $id)
		{
			$product = Product::find($id)->first();

			$this->validate($request,[
				'kode_produk' => 'required',
				'nama_produk' => 'required',
				'harga'				=> 'required'
			]);

			$product->kode_produk = $request->kode_produk;
			$product->nama_produk = $request->nama_produk;
			$product->harga			 = $request->harga;
			$product->update();
			return 'sukses';
		}

}
