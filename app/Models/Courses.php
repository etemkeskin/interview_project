<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = "courses";
    protected $primaryKey = "id";
    protected $guarded = [];


    public function lessons()
    {
        $this->hasMany(Lessons::class);
    }
}
