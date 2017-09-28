<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\SuccessMessage;
use app\lib\exception\ThemeException;

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

        if ($result->isEmpty()) {
            throw new ThemeException();
        }
        $success = new SuccessMessage();
        $success->data = $result;
        return $success;
    }

    /*
     *  @id
     * */
    public function getComplexOne($id)
    {
        (new IDMustBePostiveInt())->goCheck();

        $result = ThemeModel::getThemeWithProduct($id);
        if ($result->isEmpty()){
            throw new ThemeException();
        }
        return new SuccessMessage([
            'data' => $result
        ]);// $result;
    }
}
