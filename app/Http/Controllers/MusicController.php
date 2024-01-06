<?php

namespace App\Http\Controllers;

use App\Http\Resources\MusicResource;
use App\Models\Music;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MusicController extends Controller
{
    public function getAllmusic()
    {
        $music = Music::all();
        return MusicResource::collection($music);
    }

    public function getMusic($id)
    {
        try {
            $music = Music::find($id);
            if ($music) {
                return response()->json([
                    'status' => Response::HTTP_OK,
                    'message' => 'Music retrieved successfully',
                    'data' => new MusicResource($music),
                ]);
            }

            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Music not found',
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
