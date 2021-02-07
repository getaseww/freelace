<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PadminController extends Controller
{

    public function __construct(){
        
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

         return view('admin.posts',compact('posts'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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

            'title' => 'required',
            'bid' => 'required',

            'description' => 'required',

        ]);
         
        $post=new Post;
        $post->user_id =auth()->user()->id;
        $post->title= $request->input('title');
        $post->bid= $request->input('bid');
        $post->description= $request->input('description');
        

        $post->save();
        return redirect('/admin/posts');

        

   

        return redirect()->route('manageposts')

                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([

            'title' => 'required',
            'bid' => 'required',
            'description' => 'required',

        ]);

       $post->update($request->all());

       return redirect()->route('manageposts')

                        ->with('success','Post updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('manageposts')

                        ->with('success','Post deleted successfully');
    }


}
