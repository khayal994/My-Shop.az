<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="pstyle.css">
	<link rel = "stylesheet" href="pstyle.css"> 
	<style>

	</style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>İstifadəçi adı</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Parol</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Daxil ol</button>
          <a href="signup.php" class="ca">Hesab yarat</a>
     </form>
</body>
</html>