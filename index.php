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
<from>
หมวดหมู่
<select name="cars">
<option value="--หมวดหมู่--">--หมวดหมู่--</option>
<option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
<option value="เรื่องร้องเรียน">เรื่องร้องเรียน</option>
</select>
<a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
</from>
<ul>
<?php
$i = 1;
while($i <= 10){
    echo "<li><a href=post.php?id=$i>กระทู้ที่$i</a></li>";
    $i++;
}



?>
</ul>
<a haref ="post.php";


</body>
</html>

