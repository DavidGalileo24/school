<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'alm_codigo' => $this->alm_codigo,
            'alm_nombre' => $this->alm_nombre,
            'alm_edad' => $this->alm_edad,
            'alm_sexo' => $this->alm_sexo,
            'alm_id_grd' => $this->alm_id_grd,
            'alm_observation' => $this->alm_observation,
        ];
    }
}
