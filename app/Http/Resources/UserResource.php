<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'bio' => $this->bio,
            'birthdate' => $this->birthdate,
            'gender' => $this->gender,
            'email' => $this->email,
            'password' => $this->password,
            'profile_picture' => $this->profile_picture,
        ];
    }
}
