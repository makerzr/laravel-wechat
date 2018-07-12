<?php

namespace App\Http\Controllers;

use Hamcrest\Util;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 正常返回
     * @param $message
     * @param array $data
     * @param $code
     * @return \Illuminate\Http\Response
     */
    public function response($message,$data=[],$code)
    {
        $data['out']=[
            'msg' => $message,
            'code' => $code
        ];
        if ($data) {
            // null转换成'' true|false转换成1|0
            array_walk_recursive($data, function (&$item, $key) {
                if (is_null($item)) {
                    $item = '';
                } elseif (is_bool($item)) {
                    $item = (true === $item) ? 1 : 0;
                }
            });
            $out['data'] = $data;
        }
        return \Response::make($out);
    }
    /**
     * 错误文字
     *
     * @param $key errors语言包中key
     * @param array $values 变量
     * @return \Illuminate\Contracts\Translation\Translator|string
     */
    public static function error($key, $values = [])
    {
        $msg = __(sprintf('errors.%s', $key));
        if (count($values) > 0) {
            foreach ($values as $key => $value) {
                $msg = str_replace("#${key}#", $value, $msg);
            }
            return $msg;
        } else {
            return $msg;
        }
    }
    /**
     * 报错返回
     * @param $message
     */
    public function throwError($value,$code)
    {
        return $value."错误码".$code;
    }
}
