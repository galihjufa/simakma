<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
		public $incrementing = false;
    public function regency()
    {
    	return $this->belongsTo('App\Regency');
    }

    public function village()
    {
    	return $this->hashMany('App\Village');
    }
}
