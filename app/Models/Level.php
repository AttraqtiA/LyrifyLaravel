<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;


    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function music()
    {
        return $this->belongsTo(Music::class);
    }

    protected $fillable = [
        'chapter_id',
        'music_id',
        'difficulty',
    ];
}
