<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'year' => $this->publication_date,
            'title' => $this->title,
            'description' => $this->discrition,
            'authors' => $this->authors->map(function ($author){
                return [
                    'author_id' => $author->id,
                    'author_name' => $author->name,
                    
                ];
            })
        ];
    }
}
