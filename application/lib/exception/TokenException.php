<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午5:41
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效token';
    public $errorCode = 10001;
}