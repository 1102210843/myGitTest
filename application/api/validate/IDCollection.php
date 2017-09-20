<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/18
 * Time: 下午5:06
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{


    protected $message = [
       'ids' => 'ids必须是以逗号分隔的正整数',
    ];

    protected function checkIDs($value){

        $values = explode(',', $value);
        if (empty($values)){
            return false;
        }
        foreach ($values as $id){
            if (!$this->isPostiveInteger($id)){
                return false;
            }
        }
        return true;
    }
}