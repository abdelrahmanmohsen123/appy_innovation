<?php

namespace App\Http\Resources\Unit;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->unitNo,
            'unit_name'=>$this->unitName,

        ];
    }
}
