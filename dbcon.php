<?php
class dbcon {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "tintuc";
    public $db;

    function __construct() {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        $this->db->set_charset("utf8");
    }

    // dang nhap
    function XuLyDangNhap($user, $pass) {
        $sql = "select * from users where Username='$user' AND password='$pass'";
        $kq = $this->db->query($sql);
            return $kq;
    }
    function TheLoaiTheoNgonNgu($lang) {
        $sql = "select * from theloai where lang='$lang' order by idTL desc";
        $kq= $this->db->query($sql);
        return $kq;
    }
    function ThemTheLoai($lang, $TenTL, $TenTL_KhongDau, $ThuTu, $AnHien) {
        $sql = "insert into theloai values(NULL,'{$lang}','{$TenTL}','{$TenTL_KhongDau}',{$ThuTu},{$AnHien})";
        $kq = $this->db->query($sql);
        return $kq;}
    function TheLoaiTheoID($idTL) {
    $sql = "SELECT * FROM theloai WHERE idTL = {$idTL}" ;
    $kq = $this->db->query($sql);
    return $kq->fetch_assoc();}
function CapNhatTheLoai($idTL, $lang, $TenTL, $TenTL_KhongDau, $ThuTu, $AnHien) {
    $sql = "UPDATE theloai  SET lang='$lang',TenTL='$TenTL',TenTL_KhongDau='$TenTL_KhongDau', ThuTu='$ThuTu', AnHien='$AnHien' WHERE idTL='$idTL'";
    return $this->db->query($sql);
}
function XoaTheLoai($idTL) {
    $sql = "DELETE FROM theloai WHERE idTL = {$idTL}";
    return $this->db->query($sql);
}
    }
?>
