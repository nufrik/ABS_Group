<?php

namespace App\Http\Resources\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllAuthorsResource extends JsonResource
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
            'name' => $this->name,
            'country' => $this->country,
            'comment' => $this->comment,
            'book' => BookForAuthorResource::make($this->book),
            //  'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
