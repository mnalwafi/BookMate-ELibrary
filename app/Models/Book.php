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

    protected $fillable = ['user_id', 'isbn', 'judul', 'penulis', 'penerbit', 'bahasa', 'jumlahHalaman', 'lebar', 'panjang', 'deskripsi', 'tanggalTerbit', 'cover', 'slug'];

    protected $guarded = 'id';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rruser(){
        return $this->hasMany(rruser::class);
    }
}
