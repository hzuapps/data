<?php
function curl_https($url = '')
{
	$ch = curl_init();

    //测试用url = 'http://apis.baidu.com/kuaidicom/express_api/express_api?com=yuantong&nu=806820160474&muti=0&order=desc';

    $header = array(

        'apikey: bfbb340a9618592ba1f0df778aa12d38',

    );

    // 添加apikey到header

    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // 执行HTTP请求

    curl_setopt($ch , CURLOPT_URL , $url);

    $res = curl_exec($ch);

    //测试用var_dump(json_decode($res));
	return json_decode($res) ;
}

?>



