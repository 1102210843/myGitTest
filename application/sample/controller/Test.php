<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/15
 * Time: 下午5:42
 */

namespace app\sample\controller;

use think\Request;

class Test
{

    public function hello(Request $request)
    {

        $name = $request->param('name');

//        $name = Request::instance()->param('name');
//        $name = input('param.name');
        return $name;
    }

}