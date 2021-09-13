<?php

    // $host = "https://zy.xywlapi.cc";
    $host = "https://cxx.yun7.me";

    $path = "/qqcx?";

    $type = $_GET['type'];
    $qq = '';
    $phone = '';
    $lol = '';

    if($_GET['uin'] != null && $type == '1') 
    {
        $qq = $_GET['uin'];
        echo '1';
    } 
    if($_GET['uin'] != null && $type == '2') 
    {
        $phone = $_GET['uin'];
        echo '2';
    } 
    if($_GET['uin'] != null && $type == '3')
    {
        $lol = $_GET['uin'];
        echo '3';
    }

    // Create a stream
    $opts = [
        "http" => [
            "method" => "GET",
            "header" => "Host: cxx.yun7.me\r\n".
                "Accept-Encoding: gzip, deflate, br\\r\n".
                "Alt-Used: cxx.yun7.me\r\n".
                "Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2\r\n" .
                "Cookie: _ga_RT13NSRESZ=GS1.1.1631371737.2.1.1631372116.0; _ga=GA1.1.575407681.1631366068\r\n".
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0\r\n"
        ]
    ];

    $context = stream_context_create($opts);

    function chaQQ($QQCode) 
    {
        global $host, $path;
        $QQapi = $host.$path.'qq='.$QQCode;
        $html = file_get_contents($QQapi);
        echo $html;

    }

    function chaPhone($Phone) 
    {
        global $host, $path, $context;
        $Phoneapi = $host.$path.'phone='.$Phone;
        echo $Phoneapi;
        
        $html = file_get_contents($Phoneapi);
        echo $html;

    }

    function chaLOL($LOLID) 
    {

    }

    switch ($type) {
        case '1':
            chaQQ($qq);
            break;
        case '2':
            chaPhone($phone);
            break;
        case '3':
            chaLOL($lol);
            break;
        default:
            # code...
            break;
    }



?>