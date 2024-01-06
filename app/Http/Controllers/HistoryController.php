<?php

namespace App\Http\Controllers;

use App\Http\Resources\HistoryResource;
use App\Models\History;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class HistoryController extends Controller
{
    public function getAllhistory()
    {
        $history = History::all();
        return HistoryResource::collection($history);
    }

    public function getHistory($id)
    {
        try {
            $history = History::find($id);
            if ($history) {
                return response()->json([
                    'status' => Response::HTTP_OK,
                    'message' => 'History retrieved successfully',
                    'data' => new HistoryResource($history),
                ]);
            }

            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'History not found',
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
    public function createHistory(Request $request)
    {
        try {
            $userId = $request->input('user_id');
            $musicId = $request->input('music_id');
            $point = $request->input('point', 0);
            $lastPlayed = now();

            $history = History::create([
                'user_id' => $userId,
                'music_id' => $musicId,
                'point' => $point,
                'last_played' => $lastPlayed,
            ]);

            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'History created successfully',
                'data' => new HistoryResource($history),
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
