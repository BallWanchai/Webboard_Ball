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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
<h1 style="text-align: center;">Webboard_Ball</h1>
<hr>
    <div style="text-align: center;"
    เข้าสู่ระบบด้วย<br>
    login = <?php echo $_POST["login"];?><br>
    password =<?php echo $_POST ["pwd"];?>
</div><br>
<div style="text-align: center;">
<?php
$login=$_POST['login'];
$pwd=$_POST['pwd'];
if ($login=="admin" && $pwd=="ad1234"){
$_SESSION["username"]="admin";
$_SESSION["role"]="a";
$_SESSION["id"]=session_id();
    echo"ยินดีต้อนรับคุณ ADMIN";
}


elseif ($login=="member" && $pwd=="mem1234"){
$_SESSION["username"]="member";
$_SESSION["role"]="m";
$_SESSION["id"]=session_id();
    echo "ยินดีต้อนรับคุณ MEMBER";
}
    
else echo"ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";




?>
<br><a href="index.php">กลับไปหน้าหลัก</a></br>
</body>
</html>