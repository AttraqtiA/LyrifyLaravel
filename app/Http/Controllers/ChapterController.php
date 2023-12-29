<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChapterResource;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function getAllChapter()
    {
        $chapters = Chapter::all();
        return ChapterResource::collection($chapters);
    }
}
