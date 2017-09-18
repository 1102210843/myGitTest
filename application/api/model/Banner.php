<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午4:06
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    //手动指定关联数据库表
//    protected  $table = 'banner';

    protected $hidden = ['delete_time', 'update_time'];

    public function items(){
        // 关联模型的名字  关联外键  当前模型的主键
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }


    public static function getBannerById($id){
        $banner = self::with(['items', 'items.img'])->find($id);
        return $banner;
    }

}