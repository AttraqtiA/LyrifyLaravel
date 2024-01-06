<?php

namespace App\Http\Controllers;

use App\Http\Resources\LevelResource;
use App\Models\Level;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LevelController extends Controller
{
    public function getAlllevel()
    {
        $level = Level::all();
        return LevelResource::collection($level);
    }

    public function getLevel($id)
    {
        try {
            $level = Level::find($id);
            if ($level) {
                return response()->json([
                    'status' => Response::HTTP_OK,
                    'message' => 'Level retrieved successfully',
                    'data' => new LevelResource($level),
                ]);
            }

            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Level not found',
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
