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
    $qty11=$_POST['qty11'];
    $qty12=$_POST['qty12'];

    $user=$_SESSION["id"];
    echo "<font color='white'>Welcome '.$user.'</font>";
    echo '<br>';
    echo "<a href='logout.php'>Logout</a>";
    $sum=180*(int)$qty1+200*(int)$qty2+165*(int)$qty3+200*(int)$qty4+250*(int)$qty5+240*(int)$qty6+240*(int)$qty7+185*(int)$qty8+220*(int)$qty9+10*(int)$qty10+14*(int)$qty11+9*(int)$qty12;
    $msg="Order Placed Sucessfully.Please make payment of Rs ".$sum." by cash on sucessful delievery";
    $con=mysqli_connect("localhost","root","","foods");
    $sql1="INSERT INTO orders2(qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9,qty10,qty11,qty12)VALUES('$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9','$qty10','$qty11','$qty12');";
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
           background-image:url("background1.jpg");
       }
       table{
           width:350px;
           height:400px;
           position:relative;
           left:650px;
           top:90px;
           border:3px solid black;
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
        var qty11=document.getElementById("qty11");
        var qty12=document.getElementById("qty12");

        if((qty1.value=='' && qty2.value=='' && qty3.value=='' && qty4.value=='' &&qty5.value=='' && qty6.value=='' && qty7.value=='' && qty8.value=='' &&qty9.value==''&&qty10.value==''&&qty11.value==''&&qty12.value=='')||(qty1.value=='0' && qty2.value=='0' && qty3.value=='0' && qty4.value=='0' && qty5.value=='0' && qty6.value=='0' && qty7.value=='0' && qty8.value=='0' && qty9.value=='0' && qty10.value=='0'&& qty11.value=='0'&& qty12.value=='0'))
		{
			alert("Please select atleast 1 item");
			return false;
		}
		return true;	
	}
</script>
    <body>
        <form action="indian_cusine.php" method="post">
      <table border="1">
         <tr>
         <th><b>Item Name</b></th>
         <th><b>M.R.P</b></th>
         <th><b>Quantity</b></th>
         </tr>
         <tr>
         <th>Panner Tikka</th>
         <th>Rs:180</th>
         <th><input type='text' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Shahi Panner</th>
         <th>Rs:200</th>
         <th><input type='text' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Spicy Paneer</th>
         <th>Rs:165</th>
         <th><input type='text' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Chilli Panner</th>
         <th>Rs:200</th>
         <th><input type='text' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Cheesy Creamy Panner</th>
         <th>Rs:250</th>
         <th><input type='text' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Malai Kofta</th>
         <th>Rs:240</th>
         <th><input type='text' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Panner Butter Masala</th>
         <th>Rs:240</th>
         <th><input type='text' name='qty7' id='qty7' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Mixed Veg</th>
         <th>Rs:185</th>
         <th><input type='text' name='qty8' id='qty8' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Dal Fried with Rice</th>
         <th>Rs:220</th>
         <th><input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Breads</th>
         <th>Rs:10/Ps</th>
         <th><input type='text' name='qty10' id='qty10' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Butter Naan</th>
         <th>Rs:14/Ps</th>
         <th><input type='text' name='qty11' id='qty11' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
         <th>Butter Roti</th>
         <th>Rs:9/Ps</th>
         <th><input type='text' name='qty12' id='qty12' size="1" maxlength="2" class="qty" style="width: 25px;"/></th>
         </tr>
         <tr>
             <th colspan="3"><input type="submit" name="submit" value="Order Now!" class="button" onclick="return chk()"></th>
         </tr>
         </table>
    </form>



    </body>
    </html>