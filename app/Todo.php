<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $table = 'Todo';
    protected $fillable = ['judul','user_id'];
    public    $timestamps = false;

    public function pembuat(){
      return $this->belongsTo('App\User', 'user_id');
    }

}
