<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;


    // public function level()
    // {
    //     return $this->hasMany(Level::class);
    // }

    public function level()
    {
        return $this->belongsToMany(Chapter::class, 'levels');
    }
    public function history()
     {
         return $this->belongsToMany(Chapter::class, 'histories');
     }

    protected $guarded = [
        'id'
    ];
}
