<?php
    
    // 生成SecID并保存
    $get_secid_code = $_GET['code'];

    // echo $get_secid_code;
    if($get_secid_code != null && $get_secid_code == 'cl12138')
    {
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = substr(str_shuffle($str), mt_rand(0,37) , 25);

        
        file_put_contents("SEC.ID", $string."\n", FILE_APPEND);



        $re_data = array('SecID'=>$string,'statu'=>1);
        echo json_encode($re_data);
    } else{
        $re_data = array('SecID'=>'','statu'=>0);
        echo json_encode($re_data);
    }
    
?>