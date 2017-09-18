<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;

class Theme
{
    /*
     *  @url /theme?ids=id1,id2,di3,...
     *  @return 一组theme模型
     * */
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();

        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg', 'headImg')
            ->select($ids);

        return $result;
    }
}
