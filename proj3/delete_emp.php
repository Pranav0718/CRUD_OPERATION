<?php
include("dbconf.php");
$eno=$_GET['eno'];
$sql = "DELETE FROM emp WHERE `eno`='$eno'";
echo($sql);

if ($dbcon->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $dbcon->error;
}



?>