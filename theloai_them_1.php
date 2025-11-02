<?php
include("dbcon.php");
$tt = new dbcon();

?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Thêm thể loại</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="process.php">
  <p>
    <label for="lang">Ngôn ngữ:</label>
    <select name="lang" id="lang">
      <option value="vi">Việt</option>
      <option value="en">Anh</option>
    </select>
  </p>

  <p>
    <label for="TenTL">Tên thể loại:</label>
    <input type="text" name="TenTL" id="TenTL" />
  </p>

  <p>
    <label for="TenTL_KhongDau">Tên không dấu:</label>
    <input type="text" name="TenTL_KhongDau" id="TenTL_KhongDau" />
  </p>

  <p>
    <label for="ThuTu">Thứ tự:</label>
    <input type="text" name="ThuTu" id="ThuTu" />
  </p>

  <p>
    <label for="AnHien">Trạng thái:</label>
    <select name="AnHien" id="AnHien">
      <option value="0">Ẩn</option>
      <option value="1">Hiện</option>
    </select>
  </p>

  <p>
    <input type="submit" name="themtheloai" id="themtheloai" value="Thêm" />
  </p>
</form>

</body>