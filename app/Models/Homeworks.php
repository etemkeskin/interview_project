<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeworks extends Model
{
    use HasFactory;

    protected $table = "homeworks";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function course()
    {
    	return $this->belongsTo(Courses::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
