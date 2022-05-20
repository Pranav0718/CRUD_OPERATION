<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CRUD</title>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet"
 integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=add]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<?php
include("dbconf.php");

$sql = "SELECT * FROM emp";
$result = $dbcon->query($sql);

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) >0)
{
      //output data of reach row
      $strtbl="";
      $strtbl="<table class='table table-dark table-hover'>";
      $strtbl.="<tr>";
      $strtbl.="<th >EMPNO</th><th>EMP NAME</th><th>SAL</th><th>ACTION</th>";
      $strtbl.="</tr>";

      while($row=mysqli_fetch_assoc($result))
      {
            
            $strtbl.="<tr>";
            $eno = $row["eno"];
           
            

            $strtbl.= "<td>". $eno. "</td><td>". $row["ename"]."</td><td>".$row["esal"]."</td>";
            $strtbl.="<td><a class='btn btn-warning' href='update_empform.php?eno=$eno'>EDIT</a> <a class='btn btn-danger' href='delete_emp.php?eno=$eno'>DELETE</a> <a href='delete_emp.php?eno=$eno'></a></td>";
            
            $strtbl.="</tr>";
      }
      $strtbl .="</table>";
      $strtbl .="<a class='btn btn-success' href='add_empform.php'>Add</a>";
}
else
{
      "<br>";
      echo "0 result";

}
echo("$strtbl");

?>
</body>
</html>