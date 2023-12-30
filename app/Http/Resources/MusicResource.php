<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MusicResource extends JsonResource
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
            'challenge_type' => $this->challenge_type,
            'title' => $this->title,
            'genre' => $this->genre,
            'lyric' => $this->lyric,
            // 'audio' => $this->audio,
            'artist' => $this->artist,
            'youtube_link' => $this->youtube_link,
            'year_released' => $this->year_released,
            'guess_duration' => $this->guess_duration,
            'status' => $this->status,
            'point' => $this->point,
            'image' => $this->image,
        ];
    }
}
