<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BaseResource;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class ToturialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = [
            'data' => []
        ];
        $data = Tutorial::get();
        if($data){
            $response['data'] = $data;
        }
        return new BaseResource($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $response = [
        //     'data' => []
        // ];
        $tutorial = Tutorial::create($request->all());
        // $tutorial->title = $request->input('title');
        // $tutorial->description = $request->input('description');
        // if($tutorial->save()){
            $response = [
                'data' => $tutorial
            ];
        // }
        return new BaseResource($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = [
            'data' => []
        ];

        $data = Tutorial::find($id);
        if($data){
            $response['data'] = $data;
        }
        return new BaseResource($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = [
            'data' => []
        ];
        $data = Tutorial::find($id)->delete();
        if($data){
            $response = [
                'data' => 1
            ];
        }
        return new BaseResource($response);
    }
}
