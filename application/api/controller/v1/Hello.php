<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/15
 * Time: 下午11:23
 */

namespace app\api\controller\v1;

use think\Request;

$name = $_GET['name'];

echo $name;

class Hello
{

    public function hello(Request $request)
    {

        $param = $request->param();
        $name = $param['name'];

        return $name;
    }
}