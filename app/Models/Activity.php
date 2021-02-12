<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

	
    use HasFactory;
	protected $table = "activities";
	protected $primaryKey = "id";
	protected $fillable = [
		'id',
		'description',
		'image',
		'post_by',
		'users_id'
	];

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
}
