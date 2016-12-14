<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Useroffer extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
