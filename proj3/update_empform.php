<?php
include("dbconf.php");
$eno="";
 $dddd="";
 $ename="";
 $esal="";
if(isset($_GET['eno']))
    $eno=$_GET['eno'];
    $action_url="update_emp.php";
    $dddd="readonly";

    //reading record of selected eno
    $sql="SELECT * FROM emp WHERE `eno`='$eno'";
    $result=$dbcon->query($sql);

    
    if($row=mysqli_fetch_assoc($result))
    {
        //output data of each row
        $eno=$row['eno'];
        $ename=$row['ename'];
        $esal=$row['esal'];
    }
    else
    {
        echo "Invalid Emp ID";
    }
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