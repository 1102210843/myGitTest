<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/17
 * Time: 下午12:31
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}