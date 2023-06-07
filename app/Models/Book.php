<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    protected $fillable = ['user_id', 'ISBN', 'judul', 'penulis', 'penerbit', 'bahasa', 'jmlHalaman', 'lebar', 'panjang', 'deskripsi', 'tanggalterbit', 'cover', 'slug'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rruser(){
        return $this->hasMany(rruser::class);
    }
}
