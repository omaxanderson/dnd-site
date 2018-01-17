<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    public function dm() {
      return $this->belongsTo('App\User');
    }

    public function characters() {
      return $this->belongsToMany('App\Character');
    }

    public function posts() {
      return $this->hasMany('App\Post');
    }
}
