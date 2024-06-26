<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <<a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
  <img src="/loginregister/aerostage/assets/img/logo/شعار_المكتب_الوطني_للمطارات.png" alt="Logo du Bureau National des Aéroports" class="logo-img">
  <h1 class="sitename">Airport Al Hoceima</h1><span>.</span>
</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>