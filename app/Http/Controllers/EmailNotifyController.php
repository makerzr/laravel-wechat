<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\PostPublished;
use App\User;
use Illuminate\Http\Request;

class EmailNotifyController extends Controller
{
    /**
     * 邮件通知
     */
    public function emailNotify()
    {
        $user = User::find(2);
        $post = Post::find(3);
        $user->notify(new PostPublished($post));
    }
}
