<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $dates = ['published_at', 'created_at', 'updated_at'];

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}
