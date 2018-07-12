<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * 群发功能
     */
    public function message()
    {
        $app = app('wechat.official_account');
        $app->broadcasting->sendNews($mediaId);//群发图文消息给所有人
        $app->broadcasting->sendNews($mediaId,[$openid1, $openid2]);//群发图文消息给指定openid的人
        $app->broadcasting->sendText('您好!感谢大家一如既往的支持我们!');
        $app->broadcasting->sendImage($mediaId); //群发图片消息
        $app->broadcasting->sendVoice($mediaId); //群发声音消息
        $app->broadcasting->sendVoice($mediaId, [$openid1, $openid2]);
        $app->broadcasting->sendVoice($mediaId, $tagId);//给指定标签下的用户群发消息
        $app->broadcasting->sendCard($cardId); //发送卡券的消息(前提要开通该服务)
//      发送预览群发消息给指定的 openId 用户
        $app->broadcasting->previewText($text, $openId);
        $app->broadcasting->previewNews($mediaId, $openId);
        $app->broadcasting->previewVoice($mediaId, $openId);
        $app->broadcasting->previewImage($mediaId, $openId);
        $app->broadcasting->previewVideo($message, $openId);
        $app->broadcasting->previewCard($cardId, $openId);
    }
}
