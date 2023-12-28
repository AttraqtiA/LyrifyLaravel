<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    // public function history()
    // {
    //     return $this->hasMany(History::class);
    // }

    // public function level()
    // {
    //     return $this->hasMany(Level::class);
    // }

    public function history()
    {
        return $this->belongsToMany(User::class, 'histories');
    }

    public function level()
    {
        return $this->belongsToMany(Music::class, 'levels');
    }

    protected $fillable = [
        'title',
        'description',
        'total_point',
        'status',
        'image',
    ];
}
