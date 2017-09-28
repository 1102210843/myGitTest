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
        echo dump($result).'111';
        return new SuccessMessage([
            'data' => $result
        ]);//$result;
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
        echo dump($result).'2222';
        return new SuccessMessage([
            'data' => $result
        ]);// $result;
    }
}
