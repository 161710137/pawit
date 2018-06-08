<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = 'mobils';
    protected $fillable = ['nama','merk','tipe','gambar''merk_id','tipe_id'];
    public $timestamps = true;

	public function mobil()
	{
		return $this->hasMany('App\mobil','merk_id');
	}
	public function mobil()
	{
		return $this->belongsTo('App\mobil','tipe_id');
	}
}
