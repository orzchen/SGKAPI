<?php

    // 代理接口
    $API = 'http://i.wannet.xyz/ms/web/api.php';
    $mod = $_GET['mod'];
    $uin = $_GET['uin'];
    $lay = $_GET['lay'];
    $sec_key = $_GET['sec'];


    $re_API = $API.'?'.'mod='.$mod.'&uin='.$uin.'&lay='.$lay;
    $html = file_get_contents($re_API);
    echo $html;
    // var_dump($html);
    // var_dump($re_API);


?>