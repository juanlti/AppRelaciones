<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
           'id'=>$this->id,
           'name'=>'Nombre del empleado: '.$this->name,
           'email'=>'Email del empleado: '.$this->email,
           // rel 1: 1
          // 'number-phone'=>'Numero de telefono del empleado: '.'('.$this->phone->prefix.')'.$this->phone->phone_number
           // rel 1: M
           'phones'=>$this->phones,
           // relacion  de Pivot
           'roles'=>$this->roles,
           //relacion de Morph
           'image'=>$this->image,
       ];
    }
}
