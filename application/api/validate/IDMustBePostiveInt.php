<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午3:39
 */

namespace app\api\validate;

use app\api\validate\BaseValidate;

class IDMustBePostiveInt extends BaseValidate
{

    protected $rule = [
        'id' => 'require|isPostiveInteger',
    ];
}