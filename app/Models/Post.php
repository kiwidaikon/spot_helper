<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute()
    {
         return Storage::url($this->image_path);
     }
 
     public function getImagePathAttribute()
     {
         return 'images/posts/' . $this->image;
     }
    }

