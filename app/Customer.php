<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function rewards(){
    	return $this->hasMany('App\RewardRequest');
    }
}
