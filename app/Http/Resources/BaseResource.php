<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if (isset($this->collection['error']) && $this->collection['error'] === TRUE) {
            return [
                'data' => $this->collection['data'],
                'message' => !empty($this->collection['msg']) ? $this->collection['msg'] : 'Fail ',
                'status' => config('constants.ERROR_CODE.API')
            ];
        }
        return [
            'data' => $this->collection['data'],
            'message' => !empty($this->collection['msg']) ? $this->collection['msg'] : 'OK ',
            'status' => config('constants.SUCCESS')
        ];
    }
}
