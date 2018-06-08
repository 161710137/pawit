<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipe extends Model
{
    protected $table = 'tipes';
     protected $fillable = ['namatipe'];
     public $timestamps = true;

	public function tipe()
	{
		return $this->hasMany('App\tipe','tipe_id');
	}
}
