<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserMusicResource;
use App\Models\UserMusic;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function getAlluser_music()
     {
         $usermusic = UserMusic::all();
         return UserMusicResource::collection($usermusic);
     }

     public function getUser_music($id)
    {
        try {
            $usermusic = UserMusic::find($id);
            if ($usermusic) {
                return response()->json([
                    'status' => Response::HTTP_OK,
                    'message' => 'UserMusic retrieved successfully',
                    'data' => new UserMusicResource($usermusic),
                ]);
            }

            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'UserMusic not found',
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
