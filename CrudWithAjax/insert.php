<?php

 include("connect.php");
 
    // extract($_POST);

         // print_r($_POST);

$nameSend = $_POST['nameS'];
$emailSend = $_POST['emailS'];
$mobileSend = $_POST['mobileS'];
$placeSend = $_POST['placeS'];



if(isset($_POST['nameS']) && isset($_POST['emailS']) 
&& isset($_POST['mobileS']) && isset($_POST['placeS'])){

    $sql = "INSERT INTO bootstrapajaxcrud (`name` , `email` , `mobile` , `place`)
    VALUES ('$nameSend','$emailSend','$mobileSend','$placeSend')" ;

    $result=mysqli_query($con,$sql);
   

   

  }







?>