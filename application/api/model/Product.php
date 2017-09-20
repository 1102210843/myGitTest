<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/18
 * Time: 下午4:53
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = [
       'delete_time', 'main_img_id', 'pivot', 'from', 'category_id', 'create_time', 'update_time'
    ];

    public function getMainImgUrlAttr($value, $data){
        return $this->prefixImage($value,$data);
    }

    public static function getMostRecent($count){

        $product = self::limit($count)->order('create_time desc')->select();
        return $product;
    }

}