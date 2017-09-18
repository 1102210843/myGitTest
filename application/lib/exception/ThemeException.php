<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/18
 * Time: 下午5:53
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定的主题不存在,请检查主题ID';
    public $errorCode = 30000;
}