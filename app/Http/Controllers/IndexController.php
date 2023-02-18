<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use App\Models\Blog;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->take(3)
            ->get();

        foreach($blogs as $index => $blog) {
            $blog['show'] = false;
            $blog['img'] = "recent-blog-".($index+1).".jpg";
        }

        return Inertia::render(
            'index',
            [
                'blogs' => $blogs
            ]
        );
    }
}
