<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*return parent::toArray($request);*/
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'discount' => $this->discount,
            'color' => $this->color,
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2),
            'gender_id' => $this->gender_id,
            'product_type_id' => $this->product_type_id,
            'number' => $this->number ==0 ? 'Out of Stock' : $this->number,
            'size' => $this->size,
            'trend' => $this->trend,
            'image' => $this->image,
            'custom' => $this->custom,
            

            'rating' =>$this->reviews->count() > 0 ? round( $this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating',

            /*'href' => [
                'link' => route('products.show',$this->id)
            ]*/
        ];
    }
}
