<?php
$dbcon = new mysqli("localhost","root","","crudoperation");

//connection check
if ($dbcon -> connect_errno)
{
      echo"failed to connect to Mysql :". $dbcondbcon->connect_error;
       exit();
}
else
{
      //echo("conection established susscessfully");
      

}
?>