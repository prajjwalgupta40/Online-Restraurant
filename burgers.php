<?php
   session_start();
   if(isset($_POST['submit'])){
    if(!empty($_SESSION["id"]))
   {
    $qty1=$_POST['qty1'];
    $qty2=$_POST['qty2'];
    $qty3=$_POST['qty3'];
    $qty4=$_POST['qty4'];
    $qty5=$_POST['qty5'];
    $qty6=$_POST['qty6'];
    $qty7=$_POST['qty7'];
    $qty8=$_POST['qty8'];
    $qty9=$_POST['qty9'];
    $qty10=$_POST['qty10'];
    $user=$_SESSION["id"];
    echo "<font color='white'>Welcome '.$user.'</font>";
    echo '<br>';
    echo "<a href='logout.php'>Logout</a>";

    $sum=40*(int)$qty1+60*(int)$qty2+65*(int)$qty3+60*(int)$qty4+80*(int)$qty5+40*(int)$qty6+90*(int)$qty7+105*(int)$qty8+120*(int)$qty9+170*(int)$qty10;
    $msg="Order Placed Sucessfully.Please make payment of Rs ".$sum." by cash on sucessful delievery";
    $con=mysqli_connect("localhost","root","","foods");
    $sql1="INSERT INTO orders(qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9,qty10)VALUES('$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9','$qty10');";
    $r=mysqli_query($con,$sql1);
    {
        if($r>0)
        {
             echo '<script type="text/javascript">alert("'.$msg.'")</script>';
        }
        else
		{  
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
		}
    }
    if(!$con){
        die("Database not found");
    }

   }
   else{
   // echo "<script type='text/javascript'>alert('You are not Login');</script>";
   header("location:print2.php");
    
    
   }
}
?>

<html>
    <style>
       body{
           background-image:url("bg1.jpg");
           background-repeat:x-repeat;
       }
       table{
           width:350px;
           height:400px;
           position:relative;
           left:650px;
           top:50px;
           border:2px solid black;
       }
       th,td{
           text-align:center;
           color:black;
           font-size:18px;
           font-style:caption;
       }

    </style>
    <script type="text/javascript">
        function chk()
	{
		var qty1=document.getElementById("qty1");
		var qty2=document.getElementById("qty2");
		var qty3=document.getElementById("qty3");
		var qty4=document.getElementById("qty4");
		var qty5=document.getElementById("qty5");
		var qty6=document.getElementById("qty6");
		var qty7=document.getElementById("qty7");
		var qty8=document.getElementById("qty8");
		var qty9=document.getElementById("qty9");
        var qty10=document.getElementById("qty10");

        if((qty1.value=='' && qty2.value=='' && qty3.value=='' && qty4.value=='' &&qty5.value=='' && qty6.value=='' && qty7.value=='' && qty8.value=='' &&qty9.value==''&&qty10.value=='')||(qty1.value=='0' && qty2.value=='0' && qty3.value=='0' && qty4.value=='0' && qty5.value=='0' && qty6.value=='0' && qty7.value=='0' && qty8.value=='0' && qty9.value=='0' && qty10.value=='0'))
		{
			alert("Please select atleast 1 item");
			return false;
		}
		return true;	
	}
</script>
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
        <form action="burgers.php" method="post">
            <input type="submit" name="home" value="home"> 
      <table border="1">
         <tr>
         <th><b>Burgers</b></th>
         <th><b>M.R.P</b></th>
         <th><b>Quantity</b></th>
         </tr>
         <tr>
         <th>Aloo Tikki</th>
         <th>Rs:40</th>
         <th><input type='text' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Cheese Aloo Tikki</th>
         <th>Rs:60</th>
         <th><input type='text' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Spicy Paneer</th>
         <th>Rs:65</th>
         <th><input type='text' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Mixed American Herbs</th>
         <th>Rs:60</th>
         <th><input type='text' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Cheesy Maharaja</th>
         <th>Rs:80</th>
         <th><input type='text' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Veg Supreme</th>
         <th>Rs:40</th>
         <th><input type='text' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Spicy Chicken</th>
         <th>Rs:90</th>
         <th><input type='text' name='qty7' id='qty7' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Chicken Supreme</th>
         <th>Rs:105</th>
         <th><input type='text' name='qty8' id='qty8' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Veg Meal</th>
         <th>Rs:120</th>
         <th><input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Non-Veg Meal</th>
         <th>Rs:170</th>
         <th><input type='text' name='qty10' id='qty10' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
             <th colspan="3"><input type="submit" name="submit" value="Order Now!" class="button" onclick="return chk()"></th>
         </tr>
         </table>
    </form>



    </body>
    </html>