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

class Banner
{

    public function getBanner($id)
    {

        (new  IDMustBePostiveInt())->goCheck();

        $banner = BannerModel::getBannerById($id);

        
        return $banner;

    }
}