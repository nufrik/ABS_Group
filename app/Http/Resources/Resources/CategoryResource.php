<?php

namespace App\Http\Resources\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'books' => BookResource::collection($this->books),
        //    'updeted_at' => $this->updeted_at,
        //    'deleted_at' => $this->deleted_at,
        ];
    }
}
