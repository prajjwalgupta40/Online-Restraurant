<?php
       
       
/*setcookie("user","", time()-3); //subtract from time
header("location:index.php");*/

      session_start();
      session_unset();
      session_destroy();
      header("location:index.php");

?>

?>