<?php

namespace App\Http\Resources\Invoice;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->lineNo,
            'productName'=>$this->productName,
            'UnitNo'=>$this->UnitNo,
            'price'=>$this->price,
            'quantity'=>$this->quantity,
            'total'=>$this->total,
            'expiryDate'=>$this->expiryDate,



        ];
    }
}
