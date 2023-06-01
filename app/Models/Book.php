<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reviewrating(){
        return $this->belongsTo(Reviewrating::class);
    }

    public function rruser(){
        return $this->hasMany(Rruser::class);
    }
}
