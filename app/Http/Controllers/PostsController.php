<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tatawagin lahat ng posts
        
//        $posts = Post::all();


        //pagination para malimit lang mga posts

        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //validating the data
        
        $this->validate($request,array(
            //validation rules
            //laging imatch sa column name
            'title' => 'required|max:255',
            'body' => 'required'
        ));
        
        //eloquent is pakikipag communcicate sa database na di na guamgamit ng 
        //sql code
        //storing it in the database 
        //redirect to another page
        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        Session::flash('success','The blog was successfully saved!');
        //"flash" exists pag one page request
        //'put' exists until the session is removed

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        //find is a helper method
        //eloquent a convient way to communicate with database
        //primary id lang kaya nya isearch 
        $post = Post::find($id);
        //pag magpapass ng variable
        return view('posts.show')->with('post',$post);

/*
         $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as a var

        // return the view and pass int the var we previously created
        

        $post = Post::find($id);


        return view('posts.edit')->with('post' , $post);



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
        // Validate the data

        $this->validate($request,array(
            //validation rules
            //laging imatch sa column name
            'title' => 'required|max:255',
            'body' => 'required'
        ));
        
        //Save the data to the database
        $post = Post::find($id);

        $post->title = $request -> input('title');
        $post->body  = $request ->input('body');
        $post -> save();
        //tuwing gagawa ng post save() auto na magagawa yung timestamp

        //Set flash data with success message
        Session::flash('success','This post was successfully saved.');
        //redirect with flash data to posts.show

        return redirect()->route('posts.show' , $post->id);
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

        $post->delete();

        Session::flash('success', 'The Post was successfully deleted');

        return redirect()->route('posts.index');
    }
}
