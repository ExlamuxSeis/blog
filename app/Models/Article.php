<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
        protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    // Relación de uno a muchos inversa (article - user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relación de uno a muchos (article - comments)
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    // Relación de uno a muchos inversa (category - articles)
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
