<?php
include("dbconf.php");

$sql = "SELECT * FROM emp";
$result = $dbcon->query($sql);

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) >0)
{
      //output data of reach row
      $strtbl="";
      $strtbl="<table border=10,>";
      $strtbl.="<tr>";
      $strtbl.="<th>EMPNO</th><th>EMP NAME</th><th>SAL</th><th>ACTION</th>";
      $strtbl.="</tr>";

      while($row=mysqli_fetch_assoc($result))
      {
            
            $strtbl.="<tr>";
            $eno = $row["eno"];
           
            

            $strtbl.= "<td>". $eno. "</td><td>". $row["ename"]."</td><td>".$row["esal"]."</td>";
            $strtbl.="<td><a href='update_empform.php?eno=$eno'>EDIT</a> |<a href='delete_emp.php?eno=$eno'>DELETE</a> |<a href='delete_emp.php?eno=$eno'></a></td>";
            
            $strtbl.="</tr>";
      }
      $strtbl .="</table>";
      $strtbl .="<a href='add_empform.php'>Add</a>";
}
else
{
      "<br>";
      echo "0 result";

}
echo("$strtbl");

?>