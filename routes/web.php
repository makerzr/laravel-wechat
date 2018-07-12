<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::loginUsingId(1);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/name',function (){
   return ['name'=>'刘德华'];
});

Route::group(['middleware' => ['wechat.oauth']], function () {
    Route::get('/user', 'UserController@user'); // 查看所有微信公众平台下的用户
    Route::get('/users', 'UserController@users');
    Route::patch('/user/remark', 'UserController@remark');//给某个用户进行备注
    Route::get('/material/image', 'MaterialController@image');//上传图片类型的素材
    Route::post('/material/voice', 'MaterialController@voice');//上传声音类型的素材等
    Route::get('/material/article', 'MaterialController@article');//上传图文信息的素材
    Route::patch('/material/article', 'MaterialController@updateArticle');//修改图文消息的素材
    Route::get('/material/list', 'MaterialController@materialList'); //获取素材列表
    Route::get('material/one/{mediaId}', 'MaterialController@one'); //获取单个mediaId
});
Route::get('notify','PostPublishedController@notify');
Route::get('subscribe','UserSubscribeController@subscribe');
// 微信
Route::any('wechat', 'WeChatController@serve');

//git checkout
Route::get('/report',function (){
   dd('324324');
});

Route::get('/about',function (){
    dd('324324');
});