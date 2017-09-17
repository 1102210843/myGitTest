<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/17
 * Time: 上午10:49
 */

namespace app\lib\exception;



class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 10001;
}