<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKas extends Model
{
    use HasFactory;
	public function tipeKasDetail(){
		return $this->hasMany(TipeKasDetail::class);
	}
}
