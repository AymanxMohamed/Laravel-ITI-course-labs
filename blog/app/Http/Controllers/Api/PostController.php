<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use Carbon\Carbon;

class PostController extends Controller
{

    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $posts = Post::all();
        return PostResource::collection($posts);
    }


    public function store(StorePostRequest $request): PostResource
    {
        $post = Post::create($request->all());
        return new PostResource($post);
    }

    public function show($id): PostResource
    {
        $post = Post::find($id);
        return new PostResource($post);
    }
}
