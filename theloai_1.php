<?php
include("dbcon.php");
$tt = new dbcon();

$lang = 'vi';
if (isset($_GET['ngongu'])) {
    $lang = $_GET['ngongu'];
}
?>
<body>
    <from id="form1" name="form1" method="get" action"">
        <label for="lang">Ngon ngu:</label>
        <select name="ngonngu" id="lang" onchange="form1.submit()">
            <option value="vi">Viet</option>
            <option value="en" <?php if ($lang=='en') echo" selected='selected'"; ?>>Anh</option>
        </select>
    </from>
    <table width="700" border="1">
  <tr>
    <td width="43">STT</td>
    <td width="255">Tên thể loại</td>
    <td width="204">Tên không dấu</td>
    <td width="70">Trạng thái</td>
    <td width="100"><a href="index.php?key=theloaithem">Thêm</a></td>
  </tr>
  <?php
  $kq=$tt->TheLoaiTheoNgonNgu($lang);
  while ($row=$kq->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row['ThuTu']; ?></td>
        <td><?php echo $row['TenTL']; ?></td>
        <td><?php echo $row['TenTL_KhongDau']; ?></td>
        <td><?php if ($row['AnHien']==1) echo "Hiện"; else echo"Ẩn"; ?></td>
        <td width="100">
            <a href="process.php?xoatl=<?php echo $row['idTL']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa thể loại này không?');">Xóa</a> /
            <a href="index.php?key=theloaisua&idTL=<?php echo $row['idTL']; ?>">Sửa</a>
        </td>
    </tr>
    <?php }?>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<p>&nbsp;</p>
</body>