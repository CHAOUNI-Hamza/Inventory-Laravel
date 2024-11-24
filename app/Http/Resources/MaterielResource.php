<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MaterielResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'category_id' => $this->category_id,
            'bon_commande_id' => $this->bon_commande_id,
            'stock' => strval($this->stock),
            'num_inventaire' => $this->num_inventaire,
            'category_name' => $this->category ? $this->category->name : null,
            'bon_commande_name' => $this->bonCommande ? $this->bonCommande->ref : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
