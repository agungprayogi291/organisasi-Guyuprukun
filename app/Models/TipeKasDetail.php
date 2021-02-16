<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKasDetail extends Model
{
    use HasFactory;
	public function tipeKas(){
		return $this->belongsTo(TipeKas::class,'tipe_kas_id');
	}
	public function user(){
		return $this->belongsTo(User::class,'users_id');
	}
}
