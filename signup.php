<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet"href="aerostage/style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>
         <label> Name</label>
         <?php if (isset($_GET['name'])) { ?>
     		<input type="text" name="name" placeholder="Name"value="<?php echo $_GET['name']; ?></input>
     	<?php }else{?>
            <input type="text" name="name" placeholder=" Name"><br>
            <?php } ?>
            <label> User Name</label>
         <?php if (isset($_GET['uname'])) { ?>
     		<input type="text" name="uname" placeholder=" User Name"value="<?php echo $_GET['uname']; ?></input>
     	<?php }else{?>
            <input type="text" name="uname" placeholder="  User Name"><br>
            <?php } ?>
     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
         <label> Re_Password</label>
     	<input type="password" name="re_password" placeholder="Password"><br>

     	<button type="submit">Sign Up</button>
		<a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>