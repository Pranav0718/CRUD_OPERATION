<?php
include("dbconf.php");
$eno=$_POST['txtno'];
$ename=$_POST['txtname'];
$esal=$_POST['txtsal'];
$sql = "UPDATE emp SET `eno`='$eno',`ename`='$ename',`esal`='$esal' WHERE `eno`='$eno'";

if ($dbcon->query($sql) === TRUE) {
  //echo "Record updated successfully";
  header("Location: select_emp.php"); 
} else {
  echo "Error updating record: " . $dbcon->error;
}
?>