<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * 创建菜单
     */
    public function menu()
    {
        $app = app('wechat.official_account');
        $menus = [
            [
                'type' => 'click',
                'name' => '点我试试',
                'key'  => 'YOU CLICK ME'
            ],
            [
                'name'       => '二级菜单',
                'sub_button' => [
                    [
                        'type' => 'view',
                        'name' => 'laravel',
                        'url'  => 'https://laravel.com'
                    ],
                    [
                        'type' => 'view',
                        'name' => '百度',
                        'url'  => 'https://www.baidu.com'
                    ]
                ]
            ],
        ];
        dd($app->menu->create($menus));
    }
    /**
     * 获取菜单
     */
    public function getMenu()
    {
        $app = app('wechat.official_account');
        dd($app->menu->current());
    }
    /**
     * 删除菜单
     */
    public function delete()
    {
        $app = app('wechat.official_account');
        $app->menu->delete();
    }
}
