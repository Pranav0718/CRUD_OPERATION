<?php
include("dbconf.php");

$eno=$_POST['txtno'];
$ename=$_POST['txtname'];
$esal=$_POST['txtsal'];


  $sql = "INSERT INTO emp (`eno`, `ename`, `esal`) VALUES ('$eno', '$ename', '$esal')";
echo("$sql");
if (mysqli_query($dbcon,$sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" .mysqli_error($dbcon);
}
?>