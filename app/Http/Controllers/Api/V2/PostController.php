<?php

namespace App\Http\Controllers\Api\V2;

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
        return ["message"=>"v2 index method called"];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return ["message"=>"v2 store method called"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return ["message"=>"v2 show method called"];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return ["message"=>"v2 update method called"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return ["message"=>"v2 destroy method called"];
    }
}
