<?php

namespace App\Http\Controllers;

use EasyWeChat\Kernel\Messages\Image;
use EasyWeChat\Kernel\Messages\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WeChatController extends Controller
{
    public function serve()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志
        $app = app('wechat.official_account');
        $userApi = $app->user;
        $app->server->push(function ($message) use($app){
           return '递四方速递佛挡杀佛';
        });
//        $app->server->push(function ($message) use ($app) {
//            switch ($message['MsgType']) {
//                case 'event':
//                    if ($message['Event'] == 'subscribe') {
//                        return '感谢您的关注!';
//                    }
//                    if ($message['Event'] == 'click') {
//                        if($message['EventKey']=='YOU CLICK ME'){
//                            return "你点击了!";
//                        }
//                    }
//                    break;
//                case 'text':
//                    $text = new Text('Hello world!');
//                    $result = $app->customer_service->message($text)->to('ox2nWv-fX_q1Wp9DcfM4rT_vH2oo')->send();
//                    return 'enjoy'; //这里随便给返回个什么不然的话,会提示服务号无法服务等
//                    break;
//                case 'image':
//                    $image = new Image('media123123');
//                    $result = $app->customer_service->message($image)->to($message['FromUserName'])->send();
//                    return "给您发送了一张图片";
//                    break;
//                case 'voice':
//                    return '收到语音消息';
//                    break;
//                case 'video':
//                    return '收到视频消息';
//                    break;
//                case 'click':
//                    return '您触发了点击事件';
//                    break;
//                case 'link':
//                    return '收到链接消息';
//                    break;
//                case 'file':
//                    return '收到文件消息';
//                    break;
//            }
//        });
        return $app->server->serve();
    }
}
