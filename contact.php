<?php
   session_start();
   if(isset($_POST['home']))
   {
    if(isset($_SESSION['id']))
    //echo 'Welcome <A HREF="login2.php"> '.$_SESSION['id'].'</a>';
    header("location:home.php");
else
    //echo '<A HREF="form1.html">Login/Register</A>';
    header("location:index.php");

   }
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="contact.css">
     <body>
     <form action="contact.php" method="post">
         <input type="submit" value="home" name="home">
     </form>
      <h1><b>Contact Us</b></h1>

      <div id="a">
       <p id="b">Hello!!! We are happy to help you.You can write us on our email <b><i>"prajjwalgupta40@gmail.com"</i></b>
       <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        OR!
        <br>
        <table>
            <tr>
          <td><p>Provide us your contact number:</p></td>
        <td><form action="contact2.php" method="get">
            <input type="text" name="phone" required="required"></td>
            
       
</tr>
       <tr>
           <td colspan="2" align="center"><input type="submit" value="submit" onclick="return check()"></form></td>
</tr>

</table>
       </div>
     
     </body>
</html>