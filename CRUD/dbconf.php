<?php

//create connection
$conn=mysqli_connect("127.0.0.1","root","","crud");

//check connection
if($conn===false)
{
      echo("connection failed: ");

}
echo("connected successfully");
?>