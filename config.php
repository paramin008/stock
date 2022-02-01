<?php

    $dbcon = mysqli_connect("localhost","root" ,"","stock");
    
    if (mysqli_connect_errno($dbcon)) {
        echo "ไม่สามารถติดต่อฐานข้อมูล MySQL ได้".  mysqli_connect_error();
        exit;
    }
    mysqli_set_charset($dbcon, 'utf8');
    date_default_timezone_set('Asia/Bangkok');

?>
