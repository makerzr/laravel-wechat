<?php

namespace App\Http\Controllers;

use App\Notifications\UserSubscribe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSubscribeController extends Controller
{
    public function subscribe()
    {
        $user = \Auth::user();
        $user->notify(new UserSubscribe());
    }

}
