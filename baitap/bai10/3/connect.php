<?php 
    $connect= mysqli_connect("localhost:3307","root","");
    mysqli_select_db($connect, "tintuc");
    mysqli_query($connect, "SET names 'utf8'");
    if(!$connect){
        echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
    }
?>