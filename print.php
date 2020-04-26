<?php
  session_start();
  echo "<script type='text/javascript'>alert('You are in queue.We will contact you soon');</script>"
  ?>
  <style>
      body{
          background-image:url("contact_us.jpg");
      }
h1{
    font-family:Lucida handwriting;
    position:relative;
    top:20px;
}
      </style>
      <?php
 if(isset($_POST["home"])){
     if(isset($_SESSION["id"])){
         header("location:home.php");
     }
     else{
         header("location:index.php");
     }
 }
 ?>
      <body>
          <form  action="print.php" method="post">
         <h1 align="center" ><input type="submit" name="home" value="Go to home page"></h1>
</form>
      </body>

