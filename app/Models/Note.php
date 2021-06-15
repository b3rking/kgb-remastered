<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'title', 'user_id'];

    public function Like() {
        return $this->hasMany(Like::class);
    }

    public function Comment() {
        return $this->hasMany(Comment::class);
    }
}
