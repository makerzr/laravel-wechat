<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    /***
     * 生成临时二维码
     */
    public function qrcode()
    {
        $app = app('wechat.official_account');
        $result = $app->qrcode->temporary('foo', 6 * 24 * 3600);
        dd($result);
    }

    /**
     * 生成一个永久的二维码
     */
    public function forever()
    {
        $app = app('wechat.official_account');
        $result = $app->qrcode->forever(1);//这里的1是 编号 (我们可以生成的永久二维码最多是10万个)
        dd($result);
    }

    /**
     * 获取二维码的url
     */
    public function url()
    {
        $app = app('wechat.official_account');
        $ticket = 'gQHz8DwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyUnlkdnQzN0ZibV8xMDAwMGcwM0kAAgSDdelaAwQAAAAA';
        $result = $app->qrcode->url($ticket);
        dd($result);
    }

    /**
     * 生成短网址
     */
    public function shortUrl()
    {
        $app = app('wechat.official_account');
        $shortUrl = $app->url->shorten('https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&tn=site888_3_pg&wd=git%20%E7%94%9F%E6%88%90ssh%20key&oq=Permission%2520denied%2520(publickey).%2520fatal%253A%2520%2526lt%253Bould%2520not%2520read%2520from%2520remote%2520repository.&rsv_pq=bbb30f5d00033c3d&rsv_t=4316uYsEh5PxVDkm7TO%2FmO%2BWVxgUB1Ednr6s7gpOKNWVgVA32xdBs9WxLU3MfTKmJDBh&rqlang=cn&rsv_enter=1&rsv_sug3=29&rsv_sug1=23&rsv_sug7=101&bs=Permission%20denied%20(publickey).%20fatal%3A%20Could%20not%20read%20from%20remote%20repository.');
        dd($shortUrl);

//        (
//            [errcode] => 0
//            [errmsg] => ok
//            [short_url] => https://w.url.cn/s/Aq7jWrd
//        )
    }
}
