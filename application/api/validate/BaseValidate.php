<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/16
 * Time: 上午3:33
 */

namespace app\api\validate;

use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{

    public function goCheck()
    {
        $request = Request::instance();
        $param = $request->param();

        $result = $this->batch()->check($param);

        if (!$result){
            $e = new ParameterException([
                'msg' => $this->error,
//                'code' => '',
//                'errorCode' => ''
            ]);
//            $e->msg = $this->error;
            throw $e;
        }else{
            return true;
        }
    }


}