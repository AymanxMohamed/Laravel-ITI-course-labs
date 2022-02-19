<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        'hello world';

            // 1- get the posts data from the data base
            // 2- pass the posts data to the index.blade.php
            // 3- in the index view you have to loop on the data
            // and display it in a nice looking table
        $posts = [
            ['id' => '1', 'title' => 'Learn PHP', 'posted-by' => 'Ahmed', 'created-at' => '2018-04-10'],
            ['id' => '2', 'title' => 'Solid Principles', 'posted-by' => 'Mohamed', 'created-at' => '2018-04-12'],
            ['id' => '3', 'title' => 'Design Patterns', 'posted-by' => 'Ali', 'created-at' => '2018-04-13']
        ];
        // dd($posts); //to stop excution and dump the $posts
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show', [
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('posts.edit', [
            'id' => $id
        ]);
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
        return redirect()->route('posts.index');
    }
}