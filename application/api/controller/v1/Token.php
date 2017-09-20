<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午4:07
 */

namespace app\api\controller\v1;


use app\api\validate\TokenGet;

class Token
{
    public function getToken($code = ''){

        (new TokenGet())->goCheck();

        return 'success';
    }
}