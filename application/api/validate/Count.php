<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午2:49
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
       'count' => 'isPostiveInteger|between:1,20'
    ];

}