<?php
    //1.connect to mysql database
    //ตัวแปรที่ต้องมี host, db_username, db_password, db_name
    //ทำการconnectไปที่ฐานข้อมูล ใช้setting ฐานข้อมูลและเรื่องของusername password ที่ใช้คอนเน้คไป mysql
    $host = "localhost";
    $db_username = "root";
    $db_passwd = ""; //ถ้าไปเปลี่ยนroot ต้องแก้passwordด้วย
    $db_name = "simple_db";


    
    $con = mtsqli_connect($host, $db_username, $db_passwd, $db_name)
    or die("Error" . mysqli_error($con));
?>
 //register2,3
//ไฟล์นี้ใช้

 