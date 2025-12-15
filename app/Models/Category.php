<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    // Relación de uno a muchos (article - category)
    public function article(){
        return $this->hasMany(Article::class);
    }
}
