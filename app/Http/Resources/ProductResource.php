<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'lm' => $this->lm,
            'name' => $this->name,
            'free_shipping' => (boolean) $this->free_shipping,
            'description' => $this->description,
            'price' => (float) $this->price,
            'created' => $this->created_at->format("d/m/Y")
        ];
    }
}
