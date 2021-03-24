<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use PDO;
use SebastianBergmann\Environment\Console;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()      // GET = liste tous les post
    {
        return Post::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)      // POST = creer un post
    {
        Post::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)     // GET = montrer un seul post
    {
        return $post;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)  // PATCH = mettre à jour un post
    {
        $post->update($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)    //DELETE = effacer un post
    {
        $post->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $continent
     * @return \Illuminate\Http\Response
     */
    public function getByContinent(Post $post, $continent)      // GET = 
    {
        return $post->where('continent', $continent)->get();
    }
}
