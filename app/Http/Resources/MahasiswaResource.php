<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'Nim'=>$this->Nim,
            'Nama'=>$this->Nama,
            'Jurusan'=> strtoupper($this->Jurusan),
            // 'kelas_id' => $this->kelas_id,
            // 'No_Handphone' => $this->No_Handphone,
            // 'Email' => $this->Email,
            // 'Tanggal_Lahir' => $this->Tanggal_Lahir,
        ];
    }
}
