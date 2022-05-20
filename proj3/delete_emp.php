<?php
include("dbconf.php");
$eno=$_GET['eno'];
$sql = "DELETE FROM emp WHERE `eno`='$eno'";


if ($dbcon->query($sql) === TRUE) {
  //echo "Record deleted successfully";
  header("Location: select_emp.php"); 
} else {
  echo "Error deleting record: " . $dbcon->error;
}



?>