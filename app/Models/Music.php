<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;


    public function level()
    {
        return $this->hasMany(Level::class);
    }

    protected $fillable = [
        'challenge_type',
        'title',
        'game',
        'lyric',
        'audio',
        'artist',
        'year_released',
        'guess_duration',
        'status',
        'point',
        'image',
    ];
}
