<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $table = "lessons";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function course()
    {
    	return $this->belongsTo(Courses::class);
    }
}
