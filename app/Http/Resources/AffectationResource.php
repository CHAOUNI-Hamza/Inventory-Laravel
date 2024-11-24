<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AffectationResource extends JsonResource
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
            'materiel_id' => $this->materiel_id,
            'service_id' => $this->service_id,
            'assigned_by' => $this->assigned_by,
            'quantity' => $this->quantity,
            'date' => $this->date,
            'materiel_name' => $this->materiel ? $this->materiel->name : null,
            'service_name' => $this->service ? $this->service->name : null,
            'assigned_name' => $this->assignedBy ? $this->assignedBy->first_name : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
