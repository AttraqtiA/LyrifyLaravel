<?php

namespace App\Http\Controllers;

use App\Http\Resources\LevelResource;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function getAlllevel()
    {
        $level = Level::all();
        return LevelResource::collection($level);
    }
}
