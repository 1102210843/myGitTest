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

        $d=mktime(9, 12, 31, 6, 10, 2015);
        echo "创建日期是 " . date("Y-m-d h:i:sa", $d);

        $banner = BannerModel::create([
            'id' => 1,
            'name' => '首页置顶',
            'description' => '首页轮播图',
            'delete_time' => date('Y-m-d h:i:sa', mktime(12, 12, 12, 1, 1, 2500)),
            'update_time' => date('Y-m-d h:i:sa', mktime(12, 12, 12, 18, 9, 2017))
        ]);
        if (!$banner){
            throw new BannerMissException();
        }

        return $banner;

    }
}