<?php
session_start();
if(isset($_SESSION['id']) ){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="Wanchai" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1 style="text-align: center;">Webboard_Ball</h1>
<hr>
<form action="verify.php" method ="post">
<table style="border:2px solid black; width:40%" align="center">
<tr><td colspan="2" style="background-color: #6CD2FE;">เข้าสู่ระบบ</td></tr>
<tr><td>Login</td><td><input type="text" name="login"  required></td></tr>
<tr><td>Password</td><td><input type="Password" name = "pwd"  required></td></tr>


<tr><th colspan="2"><input type="submit" value="login"></th></tr> 
</table>
</form>
<div style="text-align: center;">
ยังไม่ได้สมัครสมาชิก
<a href="register.php">กรุณาสมัครสมาชิก</a></div>
<a href="index.php">กลับไปหน้าหลัก</a>
</body>
</html>
