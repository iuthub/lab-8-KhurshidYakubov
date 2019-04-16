<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $posts=posts::all();

        return view('welcome', [
            'posts'=> $posts,
            // 'edit_mode'=>0,
            // 'edit_post'=>NULL
        ]);
    
    }

     public function adminIndex()
    {
            $posts=posts::all();

        return view('admin.index', [
            'posts'=> $posts,
            'edit_mode'=>0,
            'edit_post'=>NULL
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'  =>   'required',
            'body'   =>   'required'
        ]);

        $post = new posts([
            'id'  => $request->get('id'),
            'title'  => $request->get('title'),
            'body'  => $request->get('body')
           
        ]);

        $post->save();

        return redirect()->route('admin.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = posts::find($id);

        return view('blog.post' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=posts::all();
        $edit_post=posts::find($id);

        return view('admin.edit', [
            'posts'=> $posts,
            'edit_mode'=>1,
            'edit_post'=>$edit_post
        ]);
       // return redirect()->route('admin.edit')->with('info', 'Post deleted!');
    }



     public function save(Request $req){
        $post=posts::find($req->input('id'));
        $post->body=$req->input('body');

        $post->save();


        return redirect()->route('admin.index')->with('info', 'Post updated!');
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
    public function delete($id)
    {
        $post=posts::find($id); //$post=Post::where('id','=', $id)->orderBy('id', 'desc')->first()

        $post->delete();

        return redirect()->back()->with('info', 'Post deleted!');
    }


    public function postView($id)
    {
        $posts=posts::all();

        return view('blog.post', [
            'posts'=> $posts
        ]);
    }
}
