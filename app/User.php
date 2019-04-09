<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $fillable = [
        'id','nama', 'email', 'username','password','api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','api_token'
    ];

    public function get_user(){
      return $this->hasMany('App\Todo','id');
      }

}
