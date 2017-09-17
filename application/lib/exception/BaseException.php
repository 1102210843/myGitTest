<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/17
 * Time: 上午10:46
 */

namespace app\lib\exception;


class BaseException
{
    //HTTP 状态码
    public $code = 400;

    //错误具体信息
    public $msg = '参数错误';

    //自定义的错误码
    public $errorCode = 10000;
}