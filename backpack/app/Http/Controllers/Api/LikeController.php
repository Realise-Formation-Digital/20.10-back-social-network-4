<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()      //GET = liste des like
    {
        return Like::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)   // POST
    {
        Like::created($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)    // GET = un seule like
    {
        return $like;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Like $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)  //PACH 
    {
        $like->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Like $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        $like->delete();
    }

    /**
     * Display the specified resource.
     *
     * @param  Like $continent
     * @return \Illuminate\Http\Response
     */
    public function getByLike(Like $post, $like)    //Get all likes 
    {
        return $post->where('like', $like)->get();
    }
}
