<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

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
    //    $data = $request->all();
    //    return response()->json($data)->setStatusCode(201);
    // $data=$request->only("name");
    // $data=$request->only("name","email","password");
    // return response()->json([
    //     "message"=>"Store User Successfully",
    //     "data"=>[
    //         "name"=>$data["name"],
    //         "email"=>$data["email"],
    //         "password"=>$data["password"]
    //     ]
    // ],204)->setStatusCode(201);

    // return $data;
        // return ["message"=>"store method called"];

        $request->validate([
            "title"=>"required|string|max:255",
            "body"=>"required|string"
        ]);
        $request["author_id"]=1;
        Post::create($request->only("title","body","author_id"));
        return response()->json([
            "message"=>"Post created successfully",
            "data"=>$request->only("title","body")
        ])->setStatusCode(201);
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
        $request->validate([
            "name"=>"required|string|max:12",
            "email"=>"required|email",
            "password"=>"required|string|min:6"
        ]);
        return response()->json([
            "message"=>"update method called for post $id",
            "data"=>[
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>$request->password
            ]
        ])->setStatusCode(200);
        // return ["message"=>"update method called"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //  
        // return ["message"=>"destroy method called"];
        return response()->noContent();
        
    }
}
