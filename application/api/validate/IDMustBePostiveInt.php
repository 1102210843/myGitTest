<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午3:39
 */

namespace app\api\validate;

class IDMustBePostiveInt extends BaseValidate
{

    protected $message = [
        'id' => 'id必须是正整数',
    ];

    protected $rule = [
        'id' => 'require|isPostiveInteger',
    ];
}