<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
        protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    // Relación de uno a muchos inversa (comments-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

        // Relación de uno a muchos inversa (comments-articles)
    public function article(){
        return $this->belongsTo(Article::class);
    }
}
