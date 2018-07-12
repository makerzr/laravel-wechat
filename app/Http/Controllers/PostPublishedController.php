<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\PostPublished;
use App\User;
use Illuminate\Http\Request;

class PostPublishedController extends Controller
{
    public function notify()
    {
        $user = \Auth::user();
        $post = Post::find(2);
        $user->notify(new PostPublished($post));
    }
}
