<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{	

	protected $table = 'provinces';

	public $incrementing = false;

    public function regency(){
    	return $this->hashMany('App\Regency');
    }
}
