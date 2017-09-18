<?php

namespace app\api\model;

class BannerItem extends BaseModel
{
    //快速创建模型命令
    //php think make:model api/BannerItem

    protected $hidden = ['id', 'banner_id', 'img_id', 'update_time', 'delete_time'];

    public function img(){
        return $this->belongsTo('Image', 'img_id', 'id');
    }

}
