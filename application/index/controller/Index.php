<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $url = "http://www.jianshu.com/search?q=AVOSCloudIM&page=1&type=note";
//        $url = "http://pub.alimama.com/promo/search/index.htm?q=mac&_t=".time();
//        $url = "https://www.baidu.com/s?wd=adsfd&rsv_spt=1&rsv_iqid=0xd6d4e16800008a45&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=1&rsv_sug3=6&rsv_sug1=5&rsv_sug7=101&rsv_sug2=0&inputT=978&rsv_sug4=1055";
        echo $url;
//        $taobao = file_get_contents($url);
//        echo $taobao;


//        $html = file_get_contents("http://www.baidu.com");
//        echo $html;

        $response = $this->_httpGet($url);

        echo $response;
    }

    function _httpGet($url=""){

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }
}
