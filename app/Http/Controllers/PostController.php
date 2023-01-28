<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;
use Termwind\Components\Dd;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Auth::user()->posts::with('category')->get();
        $posts = Post::with('category')->with('user')->with('image')->get();

        //dd($posts);
        return view('dashboard.post-items', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PostCategory::all();

        return view('dashboard.post-items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());

        // $request->validate([
        //     'name' => 'required | min:3 | max:40',

        // ]);

        if ($request->published == "on") {
            $request->merge(['published' => 1]);
        } else {
            $request->merge(['published' => 0]);
        }

        if ($request->slug == null) {
            $slug = str_replace(' ', '-', $request->title);
            $slug = strtolower($slug);
            $request->merge(['slug' => $slug]);
        }
        $post = Post::create($request->all());



        //imagen
        if ($request->file('file')) {
            $post->featured_image = $request->file('file')->store('posts', 'public');
            $post->save();
        }
        //retornar
        return redirect()->route('post-items.index')->with('status', 'Post successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Post $skill)
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
        $post = Post::find($id);
        $categories = PostCategory::all();
        return view('dashboard.post-items.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $post = Post::find($post);
        //dd($request->all());


        if ($request->published == "on") {
            $request->merge(['published' => 1]);
        } else {
            $request->merge(['published' => 0]);
        }

        $data = $request->all();

        //dd($request->all());
        //dd($post->update($data));

        $post->update($data);


        //imagen
        if ($request->file('file')) {
            Storage::disk('public')->delete($post->featured_image);
            $post->featured_image = $request->file('file')->store('posts', 'public');
            $post->save();
        }

        return redirect()->route('post-items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);
        if (!str_contains($post->featured_image, 'http') && $post->featured_image != null) {
            Storage::disk('public')->delete($post->featured_image);
        }
        $post->delete();
        return redirect()->route('post-items.index');
    }
}
