<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $table = 'regencies';
    	public $incrementing = false;
    public function province()
    {
    	return $this->belongsTo('App\Province');
    }

    public function district()
    {
    	return $this->hashMany('App\District');
    }
}
