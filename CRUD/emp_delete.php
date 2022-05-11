<?php
include("dbconf.php");
$eid=$_POST['eno'];
$strq="DELETE FROM crudgrid WHERE (eno=$eid)";
$result = mysqli_query($conn,$strq);
 ?>