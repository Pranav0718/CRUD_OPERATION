<?php
include("dbconf.php");
$eno="";
 $dddd="";
 $ename="";
 $esal="";

    
    $action_url="add_emp.php";
    
    echo ("
<h2>Add/Edit</h2>
<form method='post' action='$action_url' >
Emp No : <input type='text' name='txtno' value='$eno' $dddd ><br><br>
Name : <input type='text' name='txtname' value='$ename'><br><br>
Salary : <input type='text' name='txtsal' value='$esal'<br><br>
<input type='submit' value='Submit'>
</form>
");
?>