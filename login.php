<?php session_start(); ob_start();
if (isset($_COOKIE['id'])) {
    $_SESSION['id'] = $_COOKIE['id'];
    $_SESSION['hoten'] = $_COOKIE['ht'];
    setcookie("ht", $_SESSION['hoten'], time()+60*60*24*7);
    setcookie("id", $_SESSION['id'], time()+60*60*24*7);
}
if (isset($_SESSION['id'])){ header("location:index.php");}?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
  <title>Login Form</title>
  <style>
   
    #formlogin {
      width: 400px; background: #ccc;
      padding: 20px; margin: auto; border-radius: 20px; }

    #formlogin label {
      width: 120px; float: left;margin: 8px 0; }

    #formlogin .txt {
      width: 180px;  padding: 5px 0; }

    #formlogin p {margin-left: 10px; }
    #formlogin input[type='submit'] {background: #aaa }
    #formlogin input[type='reset'] {background: #aaa;   }
  </style>
</head>

<body>
  <form id="formlogin" name="formlogin" method="post" action="process.php">
    <p> <label for="username">Username:</label>
      <input type="text" class="txt" name="username" id="username" /></p>

    <p> <label for="password">Password:</label>
      <input type="password" class="txt" name="password" id="password" /> </p>

    <p> <input type="checkbox" name="rem" id="rem" /> Remember </p>

    <p> <input type="submit" name="login" id="login" value="Login" />
      <input type="reset" name="cancel" id="cancel" value="Reset" /> </p>
  </form>
</body>
</html>
