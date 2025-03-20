<?php

namespace Hanafalah\ModuleLabRadiology\Resources\RadiologyVisitRegistration;

use Hanafalah\ModulePatient\Resources\VisitRegistration\ShowVisitRegistration;

class ShowRadiologyVisitRegistration extends ShowVisitRegistration
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(\Illuminate\Http\Request $request): array
    {
        $arr = [];
        $arr = $this->mergeArray(parent::toArray($request), $arr);

        return $arr;
    }
}
