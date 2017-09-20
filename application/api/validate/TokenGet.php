<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午4:08
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{

    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
       'code' => 'code不能为空'
    ];

}