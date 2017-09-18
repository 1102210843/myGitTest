<?php

namespace app\api\model;

use think\Model;

class BannerItem extends Model
{
    //快速创建模型命令
    //php think make:model api/BannerItem

    public function img(){
        return $this->belongsTo('Image', 'img_id', 'id');
    }

}
