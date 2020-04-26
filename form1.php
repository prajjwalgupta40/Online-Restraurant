<?php

$con=mysqli_connect("localhost","root","","foods");

$n=$_POST["fname"];
$e=$_POST["email"];
$p=$_POST["phone"];
$pwd=$_POST["pwd"];
$a=$_POST["adr"];

if(!$con){
    die("Not Connected");
}
else{
    echo "<script type='text/javascript'>alert('You have been connected to server');</script>";

}
echo "<br>";
$sql="insert into insert1(name,email,phone,password,address) values('$n','$e',$p,'$pwd','$a')";

$r= mysqli_query($con,$sql);

if($r>0)
{
    echo "<script type='text/javascript'>alert('You have been Successfully Registered');</script>";
    echo "Go to "; ?> <a href="login.php">Login Page</a>
<?php
}
else
{
    echo "<script type='text/javascript'>alert('Error 404:Cannot Register you.Try Again');</script>";
    echo "Go to "; ?> <a href="form1.html">Register Page</a>

<?php
}


?>









