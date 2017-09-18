<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午3:48
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

class Banner
{

    public function getBanner($id)
    {
        (new  IDMustBePostiveInt())->goCheck();

//        $banner = BannerModel::get($id);
        $banner = BannerModel::create([
            'id' => $id,
            'name' => '首页置顶',
            'description' => '首页轮播图',
            'delete_time' => $date= date("Y-m-d",strtotime("9999-12-12")),
            'update_time' => $date= date("Y-m-d",strtotime("2017-09-18"))
        ]);
        if (!$banner){
            throw new BannerMissException();
        }

        echo 'adsfghgfdcsfdg';

        return $banner;

    }
}