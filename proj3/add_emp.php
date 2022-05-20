<?php
include("dbconf.php");

$eno=$_POST['txtno'];
$ename=$_POST['txtname'];
$esal=$_POST['txtsal'];


  $sql = "INSERT INTO emp (`eno`, `ename`, `esal`) VALUES ('$eno', '$ename', '$esal')";

if (mysqli_query($dbcon,$sql)) {
 header("Location: select_emp.php"); 
  
} else {
  echo "Error: " . $sql . "<br>" .mysqli_error($dbcon);
}
?>