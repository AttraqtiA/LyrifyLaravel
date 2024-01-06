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
            'option1' => $this->option1,
            'option2' => $this->option2,
            'option3' => $this->option3,
            'option4' => $this->option4,
            'option5' => $this->option5,
            'option6' => $this->option6,
            'answer_key' => $this->answer_key,
            'youtube_link' => $this->youtube_link,
            'artist' => $this->artist,
            'year_released' => $this->year_released,
            'guess_duration' => $this->guess_duration,
            'status' => $this->status,
            'point' => $this->point,
            'image' => $this->image,
        ];
    }
}
