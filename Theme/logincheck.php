<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 12:36
 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$ID = $_POST['ID'];
$PASSWORD = sha1($_POST['PASSWORD']);
echo  $ID."<br>".$PASSWORD;

//搜尋資料庫資料
$sql = "SELECT * FROM user where  id= '$ID'";//帳號要記得看資料庫來改
$result = $link->query($sql);
$row = $result->fetch_row();
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($ID != null && $PASSWORD != null && $row[4] == $ID && $row[3] == $PASSWORD)
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['username'] = $id;
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=teacher.php>';
}
else
{
    echo '登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>