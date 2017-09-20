<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午4:15
 */

namespace app\api\model;


class User extends BaseModel
{
    public static function getByOpenID($openid)
    {
        $user = self::where('openid', '=', $openid)->find();

        return $user;
    }


}