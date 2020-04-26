<?php
  session_start();

  if (!isset($_SESSION["id"]))
   { 
       echo "<script type='text/javascript'>alert('register first');</script>";
       echo "Go to "; ?> <a href="form1.html">Register Page</a>
 <?php 
   }
   
   $con=  mysqli_connect("localhost", "root", "","foods");
   
   $e=$_POST["email"];
   $p=$_POST["pwd"];
   
   $sql="select * from insert1 where email='$e' and password='$p'";
   $r=  mysqli_query($con, $sql);
   $count=  mysqli_num_rows($r);
   
   if($count>0)
   {
       $_SESSION["id"]=$e;
       header("location:home.php");
   }
   else
   {
          echo "<script type='text/javascript'>alert('Error:Enter correct email or password');</script>";
          echo "Go to "; ?> <a href="login.php">Login Page</a>
 <?php
   }
   
   ?>