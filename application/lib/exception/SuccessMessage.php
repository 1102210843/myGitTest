<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/28
 * Time: 下午5:33
 */

namespace app\lib\exception;


class SuccessMessage
{
    public $code = 200;
    public $data = null;

    public static function setData($result)
    {
        $success = new SuccessMessage();
        $success->data = $result;
        return $success;
    }
}