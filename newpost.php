<?php
session_start();
if(!isset($_SESSION['id']) ){
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

<?php
if (!isset($_SESSION['id'])){    
}else{
    echo "<div><br>
            ผู้ใช้ : $_SESSION[username]&nbsp;&nbsp;
            
    </div></br>";
}
?>



<table>
<tr><td>หมวดหมู่ :</td><td><select name="cars">
                        <option value="--หมวดหมู่--">--หมวดหมู่--</option>
                        <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
                        <option value="เรื่องร้องเรียน">เรื่องร้องเรียน</option>
                    </select></td></tr>
<tr><td>หัวข้อ: </td><td><input type="taxt"></td></tr>
<tr><td>เนื้อหา:</td><td><textarea rows="3" cols="20" ></textarea></td></tr>
<tr><th colspan="2"  ><input type="submit" value="บันทึกข้อความ"></th></tr>
</table>