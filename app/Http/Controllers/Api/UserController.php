<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAllUser(){
        $users = User::all();
        return UserResource::collection($users);
    }

    public function checkPassword(){
        $users = User::all();
        $check = [];

        foreach($users as $user){
            array_push($check,
            Hash::check("Budi1", $user->password));
        }
        return $check;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUser(Request $request)
    {
        try{
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->bio = $request->bio;
            $user->gender = $request->gender;
            $user->birthdate = $request->birthdate;
            $user->save();
            return[
                'status' => Response::HTTP_OK,
                'message' => "Success",
                'data' => $user
            ];
        }catch(Exception $e){
            return[
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateUser(Request $request)
    {
        if(!empty($request->email)){
            $user = User::where('email', $request->email)->first();
        }else{
            $user = User::where('id', $request->id)->first();
        }

        if(!empty($user)){
            try{
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->bio = $request->bio;
                $user->gender = $request->gender;
                $user->birthdate = $request->birthdate;
                $user->save();
                return[
                    'status' => Response::HTTP_OK,
                    'message' => "Success",
                    'data' => $user
                ];
            }catch(Exception $e){
                return[
                    'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                    'message' => $e->getMessage(),
                    'data' => []
                ];
            }
        }

        return[
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "User not found",
            'data' => []
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser(Request $request)
    {
        if(!empty($request->email)){
            $user = User::where('email', $request->email)->first();
        }else{
            $user = User::where('id', $request->id)->first();
        }

        if(!empty($user)){
            $user->delete();

            return[
                'status' => Response::HTTP_OK,
                'message' => "Success",
                'data' => []
            ];
        }

        return[
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "User not found",
            'data' => []
        ];
    }
}
