<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午4:06
 */

namespace app\api\model;


use think\Exception;

class Banner
{
    public static function getBannerById($id)
    {
        try
        {
            1/0;
        }
        catch (Exception $e)
        {
            throw $e;
        }

        //TODO:根据Banner Id号 获取Banner信息
        return 'this is Banner info';
    }
}