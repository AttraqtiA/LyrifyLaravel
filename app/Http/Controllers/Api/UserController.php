<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAllUser()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function getUser($id)
    {
        try {
            $user = User::find($id);
            if ($user) {
                return response()->json([
                    'status' => Response::HTTP_OK,
                    'message' => 'User retrieved successfully',
                    'data' => new UserResource($user),
                ]);
            }

            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'User not found',
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

    public function checkPassword()
    {
        $users = User::all();
        $check = [];

        foreach ($users as $user) {
            array_push(
                $check,
                Hash::check("Budi1", $user->password)
            );
        }
        return $check;
    }

    public function createUser(Request $request)
    {
        try {
            // Validasi request
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
                'description' => 'required|string',
                'gender' => 'required|in:0,1',
                'birthdate' => 'required|date',
                'file' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'Validation error',
                    'data' => $validator->errors(),
                ]);
            }

            // Cek apakah ada file yang diunggah
            if ($request->hasFile('file')) {
                $uploadedFile = $request->file('file');
                $fileName = $this->generateRandomString() . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->storeAs('image', $fileName, 'public');

                // Simpan path file baru ke dalam basis data
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->description = $request->description;
                $user->gender = $request->gender;
                $user->birthdate = $request->birthdate;
                $user->image = 'image/' . $fileName;
                $user->save();

                return response()->json([
                    'status' => Response::HTTP_OK,
                    'message' => 'Success',
                    'data' => $user,
                ]);
            }

            // Jika tidak ada file diunggah, gunakan default image
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->description = $request->description;
            $user->gender = $request->gender;
            $user->birthdate = $request->birthdate;
            $user->save();

            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'Success',
                'data' => $user,
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ]);
        }
    }

    public function updateUser(Request $request, $id)
    {
        try {
            // Validasi request
            $validator = Validator::make($request->all(), [
                'name' => 'nullable|string|max:255',
                'email' => 'sometimes|email|unique:users,email,' . $id,
                'password' => 'sometimes|string|min:6',
                'description' => 'sometimes|string|nullable',
                'gender' => 'sometimes|in:0,1',
                'birthdate' => 'sometimes|date',
                'file' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'Validation error',
                    'data' => $validator->errors(),
                ]);
            }

            // Cek apakah pengguna dengan ID yang diberikan ada dalam basis data
            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'status' => Response::HTTP_NOT_FOUND,
                    'message' => 'User not found',
                    'data' => [],
                ]);
            }

            // Cek apakah ada file yang diunggah
            if ($request->hasFile('file')) {
                $uploadedFile = $request->file('file');
                $fileName = $this->generateRandomString().'.'.$uploadedFile->getClientOriginalExtension();
                $uploadedFile->storeAs('image', $fileName, 'public');

                // Simpan path file baru ke dalam basis data
                $user->image = 'image/' . $fileName;
            }

            // Update data pengguna sesuai dengan input yang diberikan
            $user->name = $request->input('name', $user->name);
            $user->email = $request->input('email', $user->email);
            $user->password = Hash::make($request->input('password', $user->password));
            $user->description = $request->input('description', $user->description);
            $user->gender = $request->input('gender', $user->gender);
            $user->birthdate = $request->input('birthdate', $user->birthdate);

            $user->save();

            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'Success',
                'data' => new UserResource($user),
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ]);
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser(Request $request)
    {
        if (!empty($request->email)) {
            $user = User::where('email', $request->email)->first();
        } else {
            $user = User::where('id', $request->id)->first();
        }

        if (!empty($user)) {
            $user->delete();

            return [
                'status' => Response::HTTP_OK,
                'message' => "Success",
                'data' => []
            ];
        }

        return [
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "User not found",
            'data' => []
        ];
    }
    function generateRandomString($length = 30)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
