<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/18
 * Time: 下午4:53
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = ['topic_img_id', 'head_img_id'];

    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }
    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }
}