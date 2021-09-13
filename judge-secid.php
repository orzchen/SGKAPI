<?php
    // 验证SecID
    $sec_id = $_GET['secid'];
    $flag = 0;

    $fileUrl = "SEC.ID";
 
    $isss = file_exists($fileUrl) or exit("There is no file");
     
    $file = fopen($fileUrl, "r") ;
     
    $user = array();
    $i = 0;
    //输出文本中所有的行，直到文件结束为止。
    while(! feof($file))
    {
        $user[$i] = fgets($file);//fgets()函数从文件指针中读取一行
        $i++;
    }
    fclose($file);
    $user = array_filter($user);
    // print_r($user[0]);
    // var_dump($sec_id);
    // echo '<br>';
    foreach($user as $key => $value) {
        // echo $value.'<br>';
        // var_dump($value);
        // echo '<br>';
        // echo $sec_id;
        $sec = substr($value, 0, 25);
        // var_dump($sec);
        // echo '<br>';
        if($sec==$sec_id) {
            $flag = 1;
        }
    }

    echo json_encode(array('flag'=>$flag));


?>