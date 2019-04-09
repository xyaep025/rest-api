<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'produk';
	 protected $fillable = ['kode_barang','nama_barang','harga','foto'];
	 public $timestamps = false;

}
