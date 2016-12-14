<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function urequires()
    {
      return $this->hasMany('App\Userequire');
    }

    public function uoffers()
    {
      return $this->hasMany('App\Useroffer');
    }
}
