<?php
/**
 * Created by PhpStorm.
 * User: sunyu
 * Date: 2017/9/20
 * Time: 下午4:17
 */

namespace app\api\service;


use app\lib\exception\WeChatException;
use think\Exception;

class UserToken
{
    protected $code;
    protected $wxAppID;
    protected $wxAppSecret;
    protected $wxLoginUrl;

    function __construct($code)
    {
        $this->code = $code;
        $this->wxAppID = config('wx.app_id');
        $this->wxAppSecret = config('wx.app_secret');
        $this->wxLoginUrl = sprintf(config('wx.login_url'), $this->wxAppID, $this->wxAppSecret, $this->code);
    }

    public function get(){

        $result = curl_get($this->wxLoginUrl);
        $wxResult = json_decode($result, true);
        if (empty($wxResult)){

            throw new Exception('获取session_key及openID时异常');
        }else{

            $loginFail = array_key_exists('errcode', $wxResult);
            if ($loginFail){
                $this->processLoginError($wxResult);
            }else{
                $this->grantToken($wxResult);
            }
        }
    }

    private function grantToken($wxResult){

        // 拿到openId
        // 数据库里看一下,这个openID是否已经存在
        // 如果存在则不处理,如果不存在那么新增一条user记录
        // 生成令牌,准备缓存数据,写入缓存
        // 把令牌返回客户端

        $openid = $wxResult['openid'];

        dump(json($wxResult));


    }


    private function processLoginError($wxResult){

        throw new WeChatException([
            'msg' => $wxResult['errmsg'],
            'errorCode' => $wxResult['errcode']
        ]);
    }
}