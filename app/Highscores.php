<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highscores extends Model
{
    protected $fillable = [
        'user_id', 'score', 'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
