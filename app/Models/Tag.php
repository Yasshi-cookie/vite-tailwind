<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }
}