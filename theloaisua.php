<?php
include("dbcon.php");
$tt = new dbcon();

$idTL = $_GET['idTL'] ?? 0;
$row = $tt->TheLoaiTheoID($idTL); 
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Sửa thể loại</title>
</head>
<body>

<h2>Sửa thể loại</h2>
<form method="post" action="process.php">
  <input type="hidden" name="idTL" value="<?php echo $row['idTL']; ?>">

  <p>Ngôn ngữ:
    <select name="lang">
      <option value="vi" <?php if ($row['lang']=='vi') echo 'selected'; ?>>Việt</option>
      <option value="en" <?php if ($row['lang']=='en') echo 'selected'; ?>>Anh</option>
    </select>
  </p>

  <p>Tên thể loại:
    <input type="text" name="TenTL" value="<?php echo $row['TenTL']; ?>">
  </p>

  <p>Tên không dấu:
    <input type="text" name="TenTL_KhongDau" value="<?php echo $row['TenTL_KhongDau']; ?>">
  </p>

  <p>Thứ tự:
    <input type="text" name="ThuTu" value="<?php echo $row['ThuTu']; ?>">
  </p>

  <p>Ẩn / Hiện:
    <select name="AnHien">
      <option value="0" <?php if ($row['AnHien']==0) echo 'selected'; ?>>Ẩn</option>
      <option value="1" <?php if ($row['AnHien']==1) echo 'selected'; ?>>Hiện</option>
    </select>
  </p>

  <p>
    <input type="submit" name="capnhattheloai" value="Cập nhật">
  </p>
</form>

</body>
</html>
