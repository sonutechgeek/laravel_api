<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ["message"=>"index method called"];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return ["message"=>"store method called"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // return ["message"=>"show method called"];
        return response()->json([
            "message"=>"show method called for post $id",
            "post"=>[
                "id"=>$id,
                "title"=>"Sample Post $id",
                "content"=>"This is the content of post $id"
            ]
        ])->header('Test', 'Sonuç Başarılı')
        ->header('Content-Type', 'application/json')
        ->setStatusCode(200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return ["message"=>"update method called"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return ["message"=>"destroy method called"];
    }
}
