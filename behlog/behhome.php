<?php

session_start();
if(isset($_SESSION['uname'])){
?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>HOME PAGE</title>
 
    <style>
        .multicolor-text {
            background: linear-gradient(to left,violet,indigo,blue,green,yellow,orange,red);
            -webkit-background-clip: text;
            color: transparent;
        }
        
    </style>
 </head>
 
 <body style="background-image: -webkit-linear-gradient(left, red,yellow)">
 
 <br>
 <div class="multicolor-text"> 
 <center><h1>WELCOME  <?php echo $_SESSION['uname']; 
 ?>! </h1>
 </div>  
 <center><i><b>LOGIN SUCCESSFUL !!</b></i>
 <br>
 <br>
 <a href="behlogout.php"> Logout </a>
 <br> <br>
 <br>
 <img src = thumbs.gif>
 </body>
 </html>
 
 <?php
 }else{
 header("Location: behlogin.php");
 exit();
 }
 ?>
 
