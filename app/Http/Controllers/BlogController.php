<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return Inertia::render(
            'blog',
            [
                'blogs' => $blogs
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return Inertia::render(
        //     'Blog/Create'
        // );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'writer' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'summary' => 'required',
            'body' => 'required',
        ]);
        // Post::create([
        //     'writer' => "test",
        //     'title' => "test",
        //     'category' => "test",
        //     'summary' => "test",
        //     'body' => "test",
        // ]);
        $img_name = str_random(32).".png";
        Blog::create([
            'writer' => $request->writer,
            'title' => $request->title,
            'category' => $request->category,
            'summary' => $request->summary,
            'body' => $request->body,
            'sumbnail' => $img_name
        ]);
        // Storage::put("public/".$img_name, base64_decode($request->sumbnail));
        // Storage::disk('local')->put($img_name, base64_decode($request->sumbnail));

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
