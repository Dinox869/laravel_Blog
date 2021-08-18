<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{

    public function index(){
        return view('welcome',[
            'posts' => Post::
            where('title','LIKE','%'.request('search').'%')->paginate(6)
        ]);
    }

    public function show(Post $post){

        $page = request('page');


        return view( $page??'layouts/updateformfiled',[
            'post'=> $post
        ]);

    }

    public function update(Post $post)
    {

        $attributes = $this->validateUpdatePost($post);

        if($attributes['thumbnail']??false){
            $attributes['thumbnail'] = request()->file('thumbnail')->storePublicly('images','public');
            }

        $post->update($attributes);

        return redirect('/home');
    }

    public function create(){
        return view('layouts.formfield');
    }

    public function store(){

        Post::create(array_merge($this->validatePost(),[
            'user_id'=> 2,
            'thumbnail'=> request()->file('thumbnail')->storePublicly('images','public')
        ]));
        return redirect('/home');
    }

    public function validatePost():array
    {
        return request()->validate([
            'title' => 'required',
            'slug'=>['required',Rule::unique('posts','slug')],
            'thumbnail' => ['required', 'image'],
            'body'=> 'required',
            'excerpt'=>'required',
            'category_id'=>'required'
        ]);
    }

    public function validateUpdatePost(Post $post):array
    {
        return request()->validate([
            'title' => 'required',
            'body'=> 'required',
            'thumbnail'=> 'image',
            'excerpt'=>'required',
            'category_id'=>'required'
        ]);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect('/home');
    }



}
