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

        $banner = BannerModel::get($id);
//        $banner = BannerModel::create([
//            'id' => 1,
//            'name' => '首页置顶',
//            'description' => '首页轮播图',
//            'delete_time' => '2500-02-17',
//            'update_time' => '2017-02-17'
//        ]);
        if (!$banner){
            throw new BannerMissException();
        }

        return $banner;

    }
}