<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index')
            ->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createPost');
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
            'title' => 'required|min:2|max:100',
            'description' => 'required|max:500',
            'image' => 'required|image'
        ], [
            'title.required' => 'Please enter your title',
            'title.min' => 'Title should be more than two character',
            'description.required' => 'Please write your post'
        ]);
        // $image_new_name = '';
        // if ($request->has('image')) {
        //     $file = $request->image;
        //     $image_new_name = time() . $file->getClientOriginalName();
        //     $file->move('upload', $image_new_name);
        // }

        $image_new_name = '';
        $file = $request->image;
        $image_new_name = time() . $file->getClientOriginalName();
        $file->move('upload', $image_new_name);

        post::create(['title' => $request->title, 'description' => $request->description, 'image' => $image_new_name]);
        return redirect()->route('Admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $Admin)
    {
        return view('admin.edit')
            ->with('post', $Admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $Admin)
    {

        $request->validate([
            'title' => 'required|min:2|max:100',
            'description' => 'required|max:500',
            'image' => 'image'
        ], [
            'title.required' => 'Please enter your title',
            'title.min' => 'Title should be more than two character',
            'description.required' => 'Please write your post'
        ]);

        if ($request->has('image')) {
            unlink('upload/' . $Admin->image);
            $file = $request->image;
            $image_new_name = time() . $file->getClientOriginalName();
            $file->move('upload', $image_new_name);
            $Admin->image = $image_new_name;
            $Admin->save();
        }
        // $Admin = Post::find($Admin); it is more description
        $Admin->title = $request->title;
        $Admin->description = $request->description;
        $Admin->save();

        return redirect()->route('Admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::Findorfail($id);
        unlink('upload/' . $post->image);
        $post->delete();
        return redirect()->back();
    }
}
