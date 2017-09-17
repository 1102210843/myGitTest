<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午4:06
 */

namespace app\api\model;


use think\Exception;
use think\Db;

class Banner
{
    public static function getBannerById($id)
    {
//        $result = Db::query('select * from banner_item where banner_id=?', [$id]);
//        return $result;
        $result = Db::table('banner_item')->where('banner_id', '=', $id)
            ->select();
        return $result;

    }
}