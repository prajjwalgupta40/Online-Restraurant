<?php
  session_start();

  /* if (isset($_COOKIE["id"]))
   {
       header("location.php");
   }*/
  
   if(isset($_SESSION["id"]))
   {
    header("location.php");
  
   }

?>

<html>
    <link rel="stylesheet" href="login.css">
    <body>
        <h1 align="center"><font size="13">Log In</font></h1>
        <a href="home.html"><img id="d" src="home.png" width="50px" height="45px"></a>
        
        
        <form action="login2.php" method="POST">
            
        <table border="1">
           <tr>
                <td><b>Email:</b></td>
                <td><input type="email" name="email" required="required"></td>
           </tr>
            
            <tr>
                    <td><b>Password:</b></td>
                    <td><input type="password" name="pwd" required="required"></td>
            </tr>
            <tr>
                    <td colspan="2"><input type="submit" value="submit"></td>
            </tr>    
        </table>
        </form>
        
        <p id="b"><b>New to here?</b></p>
        <form action="form1.html">
        <input id="c" type="submit" value="Register"></a> 
        </form>
         <img id="a" src="food2.jpg">
    </body>
</html>