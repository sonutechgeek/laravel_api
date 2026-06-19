<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;
use GuzzleHttp\Psr7\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return Post::all();
        return PostResource::collection(Post::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
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

        $data=$request->validated();
        // ([
        //     "title"=>"required|string|max:255",
        //     "body"=>"required|string"
        // ]);
        $data["author_id"]=2;
        $post=Post::create($data);
        // return response()->json([
        //     "message"=>"Post created successfully",
        //     "data"=>$request->only("title","body")
        // ])->setStatusCode(201);
        return response()->json($post,201);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show(Post $post)
    {
        //
        // return ["message"=>"show method called"];
        // return response()->json([
        //     "message"=>"show method called for post $id",
        //     "post"=>[
        //         "id"=>$id,
        //         "title"=>"Sample Post $id",
        //         "content"=>"This is the content of post $id"
        //     ]
        // ])->header('Test', 'Sonuç Başarılı')
        // ->header('Content-Type', 'application/json')
        // ->setStatusCode(200);

        // with db 
        // $post = Post::findOrFail($id);
        return response()->json($post);

    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // public function update(Request $request, Post $post)
    public function update(StorePostRequest $request, Post $post)

    {
        //
        // $request->validate([
        //     "name"=>"required|string|max:12",
        //     "email"=>"required|email",
        //     "password"=>"required|string|min:6"
        // ]);
        // return response()->json([
        //     "message"=>"update method called for post $id",
        //     "data"=>[
        //         "name"=>$request->name,
        //         "email"=>$request->email,
        //         "password"=>$request->password
        //     ]
        // ])->setStatusCode(200);
        // return ["message"=>"update method called"];

        // $data=$request->validate([
        //     // "title"=>"required|string|max:50",
        //     // "body"=>"required|string|max:500",
        // ]);
        $data=$request->validated();
        $post->update($data);

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    public function destroy(Post $post)
    {
        //  
        // return ["message"=>"destroy method called"];
        $post->delete();
        return response()->noContent();
        
    }
}
