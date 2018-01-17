<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    //
    public function user() {
      return $this->belongsTo('App\User');
    }

    // need many to many
    public function campaigns() {
      return $this->belongsToMany('App\Campaign');
    }
}
