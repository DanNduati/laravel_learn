<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post = Post::all();
        //order by most recent
        //$posts = Post::orderBy('title','desc')->get();
        //using sql queries
        //$posts = DB::select('SELECT * from posts');
        //return Post::where('title','Post Two')->get();
        //limit the query
        $posts = Post::all();
        //$posts = Post::orderBy('title','desc')->get()->take(1);
        //$posts = Post::orderBy('title','desc')->paginate(11);
        return view('posts.index')->with('posts',$posts);
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
        //validation
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        //create post 
        $post = new Post;
        $post->title =$request->input('title');
        $post->body = $request->input('body');
        $post->save();
        //redirect with success message
        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show the post
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
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
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
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
         //validation
         $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        //create post 
        $post = Post::find($id);
        $post->title =$request->input('title');
        $post->body = $request->input('body');
        $post->save();
        //redirect with success message
        return redirect('/posts')->with('success','Post Updated');
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
        $post = Post::find($id);
        //delete
        $post->delete();
        return redirect('/posts')->with('success','Post Deleted');
    }
}
