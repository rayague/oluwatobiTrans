<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function realisations(){
        $post = Post::all();

        return view("realisations",compact("post"));
    }

    public function about (){
        return view("about");
    }

    public function privateDashboard (){
        $post = Post::all();
        return view("private.dashbord", compact("post"));
    }

        public function editPost ($id){
            $posts = Post::find($id);
        return view("private.edit",compact("posts"));
    }
}
