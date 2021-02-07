<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostBlogPost extends Controller
{
    public function save(Request $req)
    {
        $post=new Post;
        $post->naslov=$req->naslov;
        $post->text=$req->opis;
        $post->trainer_id=$req->trainers;
        $post->save();

        return redirect()->back();
    }
}
