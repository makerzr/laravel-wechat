<?php

namespace App\Http\Controllers;

use EasyWeChat\Kernel\Messages\Article;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public $material;

    public function __construct(Application $material)
    {
        $app = app('wechat.official_account');
        $this->material = $app->material;
    }

    /**
     * 添加图片类型的素材
     */
    public function image()
    {
        $image = $this->material->uploadImage(public_path() . '/images/20180314113520.gif');
        //上传成功后,返回media_id和图片地址
        dd($image);
    }

    /**
     * 添加声音类型的素材
     */
    public function voice()
    {
        // 上传声音类型的素材
        $voice = $this->material->uploadVoice(public_path() . '/voices/2805.mp3');
        // 上传缩略图素材
        $result = $this->material->uploadThumb("/path/to/your/thumb.jpg");
        // 上传视频素材
        $result = $this->material->uploadVideo("/path/to/your/video.mp4", "视频标题", "视频描述");
        //上传缩略图
        //用于视频封面或者音乐封面。
        $result = $this->material->uploadThumb("/path/to/your/thumb.jpg");
        //上传成功后,返回media_id
        dd($voice);
    }

    /**
     * 上传图文消息素材
     */
    public function article(Request $request)
    {
        // 上传单篇图文
        $article = new Article([
            'title'          => '现阶段要不要买房',
            'thumb_media_id' => 'dhy1bMEFgQn5-dUL00G7JSVj5Uu8iXbCbx4Wdat4fiA',
            'content'        => '现阶段要不要买房',
            'digest'         => '我是图文消息的描述',
            'source_url'     => '我是在图文消息页面点击“阅读原文”后的页面',
            'show_cover'     => 1, // 是否在文章内容显示封面图片,
            'author'         => '朱童',
        ]);
        $this->material->uploadArticle($article);
    }

    /**
     * 修改图文素材
     * @param Request $request
     */
    public function updateArticle(Request $request)
    {
        $mediaId =$request->mediaId;
        $result = $this->material->updateArticle($mediaId, [
            'title' => 'EasyWeChat 4.0 发布了！',
            'thumb_media_id' => 'qQFxUQGO21Li4YrSn3MhnrqtRp9Zi3cbM9uBsepvDmE', // 封面图片 mediaId
            'author' => 'overtrue', // 作者
            'show_cover' => 1, // 是否在文章内容显示封面图片
            'digest' => '这里是文章摘要',
            'content' => '这里是文章内容，你可以放很长的内容',
            'source_url' => 'https://www.easywechat.com',
        ]);
    }

    /**
     * 获取素材列表
     */
    public function materialList()
    {
        $list = $this->material->list('news',0,10);
        dd($list);
    }

    /**
     * 根据media_id 获取单个素材信息
     */
    public function one($mediaId)
    {
//        dhy1bMEFgQn5-dUL00G7JWmcWQs6SdaM4Vexc82C8pY
        //dhy1bMEFgQn5-dUL00G7JSVj5Uu8iXbCbx4Wdat4fiA
        $info = $this->material->get($mediaId);
        dd($info);
    }
}
