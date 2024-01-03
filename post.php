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
    
   <div style="text-align: center;"> ต้องการค้นหากระทู้หมายเลข <?php echo $_GET["id"];?></div>

<form action="verify.php" method ="post">
<table style="border:2px solid black; width:40%" align="center">
<tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
<tr><td align="center"><textarea rows="10" cols="69" name="ส่งข้อความ"></textarea></td></tr>


<tr><th colspan="2"><input type="submit" value="ส่งข้อความ"></th></tr> 
</table>
<div align = "center">
<a href="index.html">กลับไปหน้าหลัก</a>
</div>