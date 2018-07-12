<?php

namespace App\Http\Controllers;

use App\Models\UserWechat;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Psy\Input\CodeArgument;

class UserController extends Controller
{
    public $wechat;

    public function __construct(Application $wechat)
    {
        $app = app('wechat.official_account');
        $this->wechat = $app;
    }

    /**
     * 获取关注的列表
     */
    public function users()
    {
        $appId = env('WECHAT_OFFICIAL_ACCOUNT_APPID');
        $secret = env('WECHAT_OFFICIAL_ACCOUNT_SECRET');
        $data = [
            'app_id' => $appId,
            'secret' => $secret,
        ];
        return view('oauth',['data'=>$data]);
    }

    /**
     * 获取单个用户信息
     */
    public function user(Request $request)
    {
        $user = session('wechat.oauth_user');
        if ($request->session()->has('wechat.oauth_user')) {
            return redirect('http://www.baidu.com');
        }else{
            return redirect('http://www.sina.com');
        }

    }

    public function remark(Request $request)
    {
        $openId = $request->openId;
        $this->wechat->user->remark($openId, '朱童大神');
        return 'ok';
    }

    public function oauthUser()
    {
        $user = session('wechat.oauth_user');
//        $appId = env('WECHAT_OFFICIAL_ACCOUNT_APPID');
//        $secret = env('WECHAT_OFFICIAL_ACCOUNT_SECRET');
//        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appId."&secret=".$secret;
//        $info=file_get_contents($url);
//        if(json_decode($info)->access_token){
//            echo "授权成功!";
//        }
//        if(!$user){
//            return redirect('/error');
//        }else{
//            return redirect('/users');
//        }
    }
}
