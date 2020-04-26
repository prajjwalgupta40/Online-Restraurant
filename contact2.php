<?php
   $con=mysqli_connect("localhost","root","","foods");
   if(!$con)
   {
       die('not connected');
   }
   
   $p=$_GET["phone"];
   $sql="insert into contact(phone) values($p)";
   $r=mysqli_query($con,$sql);
   if($r>0)
   {
       /*echo "<script type='text/javascript'>alert('You are in queue.We will contact you soon');</script>";
       echo "Go to "; ?> <a href="home.html">home Page</a>*/
       header("location:print.php");


   }
 /*  else{
    echo "<script type='text/javascript'>alert('Please Provide your phone number');</script>";
    header("location:contact.php");
}*/
?>
