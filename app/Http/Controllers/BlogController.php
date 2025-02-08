<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $blogs = Blog::select('id', 'title', 'body', 'description')->get();
            return view('blog.index', compact('blogs'));
        } catch (\Throwable $th) {
            return [
                'succes' => false
            ];
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('blog.create');
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        try {
            $blog = new Blog();
            $blog->fill($request->all());
            $blog->save();

            session()->flash('status', 'Post Created');

            return to_route('blog.index');

        } catch (\Throwable $th) {
            Log::error($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        try {
            return view('blog.show', compact('blog'));
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        try {
            return [
                'success' => true,
                'blog' => $blog
            ];
        } catch (\Throwable $th) {
            return [
                'success' => false
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        try {
            $blog->fill($request->all());
            $blog->save();

            return [
                'success' => true
            ];
        } catch (\Throwable $th) {
            return ['success' => false];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        try {
            $blog->delete();

            return [
                'success' => true
            ];
        } catch (\Throwable $th) {
            return [
                'success' => false
            ];
        }
    }
}
