<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy("id", "desc")->paginate(5);
        return view("index", compact("posts"));
    }
    public function createPost() {
        return view("create-post");
    }
    public function savePost(Request $request) {
        $postArray = array( 
            "title"  =>  $request->title,
            "anons"  =>  $request->anons,
            "description" => $request->description
        );
        $post = Post::create($postArray);
        if(!is_null($post)) {
            return back()->with("success", "Успешно!");
        }

        else {
            return back()->with("failed", "Ошибка! Введите данные в форму");
        }
    }
}
