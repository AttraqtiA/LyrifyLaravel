<?php

namespace App\Http\Controllers;

use App\Http\Resources\MusicResource;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function getAlllmusic()
    {
        $music = Music::all();
        return MusicResource::collection($music);
    }
}
