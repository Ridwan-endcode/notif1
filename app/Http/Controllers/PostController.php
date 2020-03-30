<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Notifications\AddPost;
use Notification;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('post.allpost', compact('posts'));
    }
    public function createder(){
        return view('post.createpost');
    }

    public function store(Request $request){
        

        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->view = 0;

        

        if ($post->save()) {
            $user = User::all();
            Notification::send($user, new AddPost($post));
        }

        // dd($request->all());

        return redirect('post');
    }
}
