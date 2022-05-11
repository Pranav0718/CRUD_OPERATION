<?php
include("dbconf.php");
$sql="SELECT * FROM crudgrid";//crudgrid=database table name
$result = mysqli_query($conn, $sql);

//$recarray();
while($row= mysqli_fetch_array($result))
{
      print_r($row);
      $rec[]=$row;
}
echo("<table border='1'>");

for($row = 0; $row < count($rec); $row ++){
    echo("<tr>");
    for($col = 0; $col < count($rec[0])/2; $col++){

        echo("<td>". $rec[$row][$col]."</td>");
    }
    echo("</tr>");
}
echo("</table>");
?>


