<?php
session_start(); ob_start();
if(!isset($_SESSION['id'])) header("location:login.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
</head>

<body>
    <div id="topmenu">
        <ul>
        <li><a href ="index.php">Trang chủ</a></li>
        <li><a href ="index.php?key=theloai">Thể Loại</a></li>
        <li><a href ="index.php?key=loaitin">Loại tin</a></li>
        <li><a href ="index.php?key=tin">Tin</a></li>
        <li><a href ="index.php?key=user">USERS</a></li>    
        </ul>
    </div>
    <div id="content">
        <?php 
        if (isset($_GET['key'])) {
            switch($_GET['key'])
            { 
                case "theloai": include("theloai_1.php");break;
                case "theloaithem": include("theloai_them_1.php");break;
                case "theloaisua": include("theloaisua.php");break;
             }
            }
            ?>
    </div>

<form action="process.php" method="post" name="formThoat" id="formThoat">
  <input name="thoat" type="submit" value="Thoát" />
</form>
</body>
</html>
