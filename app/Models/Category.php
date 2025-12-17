<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
        protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    // Relación de uno a muchos (article - category)
    public function article(){
        return $this->hasMany(Article::class);
    }
}
