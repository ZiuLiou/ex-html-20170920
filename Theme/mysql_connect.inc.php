<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 01:06
 */
$link = mysqli_connect("localhost","","","");//看資料庫來修改
if(!$link){
    echo"Error:Unable to connect to MySQL".PHP_EOL;
    echo"Debugging error:".mysqli_connect_error().PHP_EOL;
    echo"Debugging error:".mysqli_connect_error().PHP_EOL;
    exit;
}