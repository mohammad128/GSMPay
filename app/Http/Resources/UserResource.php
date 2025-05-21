<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class UserResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'mobile' => $this->resource->mobile,
            'avatar' => $this->resource->avatar,
            $this->mergeWhen(isset($this->resource->total_view), [
                'total_view' => (int) $this->resource->total_view,
            ]),
        ];
    }
}
