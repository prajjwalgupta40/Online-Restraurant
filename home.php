<?php
session_start();
?>
<!doctype html>
<html>
    <link rel="stylesheet" href="home.css">

    <body>
        
        <p><font color="white" size="5" family="Lucida Handwriting">
            <?php
            if(!isset($_SESSION["id"]));
            {
                 header("location.php");
            }
            $e=$_SESSION["id"];
            echo "Welcome ".$e; 



       ?></font></p>
       <table>
           <tr>
               <td><a href="logout.php"><input type="submit" value="Log Out"></a></td>
               <td><a href="contact.php"><img src="phone.png" alt="contact" title="Contact Us" width="50px" height="40px"></a></td>
               <td><img src="help.png" alt="help" title="Support" width="50px" height="40px"></td>

           </tr>
       </table>

       <h1><b> ZAYKA RESTRAURANT"S</b></h1>
       

<div id="container">
    <ul>
        <li><b>Indian</b>
            <ul>
                 <li><a href="indian_cusine.php">Cusienes</a></li>
                 <li>Desert</li>
                 <li>Drinks</li>

     </ul>
        </li>
        <li><b>Italian</b>
            <ul>
                <li>Pizzas</li>
                <li>Platters</li>
                <li>Italian Burgers</li>
                <li>Desert</li>
                <li>Shakes</li>
            </ul>
        </li>
        <li><b>American</b>
            <ul>
                <li><a href="burgers.php">Burgers</a></li>
                <li>Mac n Cheese</li>
                <li>Choleslaw</li>
                <li>Platter</li>
                <li>Desert</li>
                <li>Drinks</li>
            </ul>
        </li>
        <li><b>Chinese</b>
            <ul>
                <li>Noodles</li>
                <li>Cuisiense</li>
                <li>Platter</li>
              
            </ul>
        </li>
        
    </ul>
    
</div>
<img src="gif1.gif" id="img1">
     <div id="content">
         <p>  A great restaurant is one that just makes you feel like you're not sure whether you went out or you came home and confuses you.</p>
      <p> If it can do both of those things at the same time, you're hooked.</p> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---Danny Meyer</p>   

         <div>
         <img src="gif2.gif" id="img2">
         <div id="content2">
            We have Our Branches At:
            <ul>
                <li>Delhi</li>
                <li>Noida</li>
                <li>Mumbai</li>
                <li>Surat</li>
                <li>Lucknow</li>
                <li>Kanpur</li>


         <div>
       

    </body>
</html>