<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="Wanchai" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css"rel="stylesheet"
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<title>Webboard_Ball</title>
</head>
<body>
<div class="container-lg"></div>
<h1 style="text-align: center;" class="mt-3">Webboard_Ball</h1>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<hr>
<from>
หมวดหมู่
<select name="cars">
<option value="--หมวดหมู่--">--หมวดหมู่--</option>
<option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
<option value="เรื่องร้องเรียน">เรื่องร้องเรียน</option>
</select>
<?php
if (!isset($_SESSION['id'])){
    echo "<a href=login.php style='float: right;'>เข้าสู่ระบบ</a>";
}else{
    echo "<div style='float:right'>
            ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;
            <a href=logout.php>ออกจากระบบ</a>
    </div><br>
    <a href=newpost.php>สร้างกระทู้ใหม่</a></br>
    ";
}
?>
</from>
<ul>
<?php
$i = 1;
while($i <= 10){
    echo "<li><a href=post.php?id=$i>กระทู้ที่$i</a>";
    if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
        echo "&nbsp;&nbsp;<a href=delete.php?id=$i>  ลบ</a>";
    }
    echo "</li>";
    $i++;
}



?>
</ul>
<a haref ="post.php";


</body>
</html>

