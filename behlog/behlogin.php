
<!DOCTYPE html>
<html>
<head>
<title>
BEH loginpage
</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="bg-img">

<h2><br><br>
<center><i>WEBSITE TESTING - BY NATHIYA S</i>
<br> <br> <br>
<center>LOGIN PAGE
</h2>
<br>

<form action="behlogcon.php" method="POST">

<center> <?php 
if(isset($_GET['error'])){ ?>
<b><p style="color:red";class="error"><?php echo $_GET['error']."<br>"; ?> </p></b>
<?php } ?>

<h4>Username:</h4> <input type="text" name="username" id="username" placeholder="Enter username" required/>

<h4>Password:</h4> <input type="password" name="password" id="password" placeholder="Enter password"
required/>

<br> <br>

<button type="submit" class="btn">Login</button>

</form>

</body>

</html>
