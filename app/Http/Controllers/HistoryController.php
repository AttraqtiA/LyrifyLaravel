<?php

namespace App\Http\Controllers;

use App\Http\Resources\HistoryResource;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function getAllChapter()
    {
        $history = History::all();
        return HistoryResource::collection($history);
    }
}
