<?php

namespace app\api\model;

use think\Model;

class Image extends Model
{
    //
    protected $hidden = ['delete_time', 'update_time', 'id', 'form'];

    public function getUrlAttr($value){

        return config('setting.img_prefix').$value;
    }
}
