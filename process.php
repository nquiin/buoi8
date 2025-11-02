<?php
ob_start();
session_start();
include("dbcon.php");
$tt = new dbcon();

// dangnhap
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']); 
    $kq = $tt->XuLyDangNhap($user, $pass);
    if ($kq->num_rows > 0) {
        $row=$kq->fetch_assoc();
        $_SESSION['hoten'] = $row['Hoten'];
        $_SESSION['id'] = $row['idUser'];
        if ($_POST['rem']=="on"){
            setcookie("ht", $_SESSION['hoten'], time()+60*60*24*7);
            setcookie("id", $_SESSION['id'], time()+60*60*24*7);}
        header("Location: index.php");
    } else { header("Location:login.php");  } 
}
if (isset($_POST['thoat']))
{
    unset($_POST['hoten']);
    unset($_SESSION['id']);
    setcookie("ht","",time()-1);
    setcookie("id","",time()-1);
    header("location:login.php");
    exit;
    }
if (isset($_POST['themtheloai']))
{ $lang = $_POST['lang']; $TenTL = $_POST['TenTL']; $TenTL_KhongDau = $_POST['TenTL_KhongDau']; $ThuTu = $_POST['ThuTu']; $AnHien = $_POST['AnHien']; 
    $kq_theloai=$tt->ThemTheLoai($lang, $TenTL, $TenTL_KhongDau, $ThuTu, $AnHien);
    if ($kq_theloai) {header("location:index.php?key=theloai");
    exit;}
    else{ echo "Thêm thể loại thất bại";
}}
if (isset($_POST['capnhattheloai'])){ $idTL = $_POST['idTL']; $lang = $_POST['lang']; $TenTL = $_POST['TenTL']; $TenTL_KhongDau = $_POST['TenTL_KhongDau']; $ThuTu = $_POST['ThuTu']; $AnHien = $_POST['AnHien'];

    $kq = $tt->CapNhatTheLoai($idTL, $lang, $TenTL, $TenTL_KhongDau, $ThuTu, $AnHien);

    if ($kq) {
        header("Location: index.php?key=theloai");
        exit();
    } else {
        echo "Cập nhật thất bại!";
    }
}
if (isset($_GET['xoatl'])) {
    $kq_xoatl = $tt->XoaTheLoai($_GET['xoatl']); 
    if ($kq_xoatl) {
        header("Location: index.php?key=theloai");
        exit;
    } else {
        echo " Xóa thể loại thất bại: " ;
    }
}
?>

