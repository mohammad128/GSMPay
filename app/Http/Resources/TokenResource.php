<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class TokenResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'token' => data_get($this->resource, 'token'),
        ];
    }
}
