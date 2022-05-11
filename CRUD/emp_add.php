<?php
include("dbconf.php");
echo"<br>";
$eno=$_POST['eno'];
$ename=$_POST['ename'];
$sal=$_POST['sal'];
$strq="INSERT INTO crudgrid(`eno`,`ename`,`sal`) VALUES($eno,'$ename',$sal)";
echo($strq);
$result =mysqli_query($conn,$strq);
?>