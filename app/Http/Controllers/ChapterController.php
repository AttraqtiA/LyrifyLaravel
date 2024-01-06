<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChapterResource;
use App\Models\Chapter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ChapterController extends Controller
{
    public function getAllChapter()
    {
        $chapters = Chapter::all();
        return ChapterResource::collection($chapters);
    }

    public function getChapter($id)
    {
        try {
            $chapter = Chapter::find($id);
            if ($chapter) {
                return response()->json([
                    'status' => Response::HTTP_OK,
                    'message' => 'Chapter retrieved successfully',
                    'data' => new ChapterResource($chapter),
                ]);
            }

            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Chapter not found',
                'data' => [],
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ]);
        }
    }
}
