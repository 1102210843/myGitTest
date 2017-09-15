<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午3:33
 */

namespace app\api\validate;

use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{

    public function goCheck()
    {
        $request = Request::instance();
        $param = $request->param();

        $result = $this->check($param);

        if (!$result){
            $error = $this->getError();
            throw new Exception($error);
        }else{

            return true;
        }

    }


}