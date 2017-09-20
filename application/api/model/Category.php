<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午3:21
 */

namespace app\api\model;


class Category extends BaseModel
{
    public function img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

}