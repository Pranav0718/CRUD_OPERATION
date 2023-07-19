<?php

include("connect.php");

if(isset($_POST["displaySend"])){

        $table='<table class="table table-dark">
        <thead class="thead-light">
          <tr>
            <th scope="col">Sr no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Place</th>
            <th scope="col">Operations</th>

          </tr>
        </thead>';

        $sql = "SELECT * FROM bootstrapajaxcrud ";
        $result = mysqli_query($con,$sql);

        $num=1;

        while($row = mysqli_fetch_assoc($result)){


            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $place = $row['place'];

            $table.='    <tr>
            <td>'.$num.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$place.'</td>
            <td>
            <button class="btn btn-dark" onclick="getDetails('.$id.')">update</button>
            <button class="btn btn-danger" onclick="deleteUser('.$id.')">Delete</button>
            </td>

          </tr>';
          $num++;
        }

        $table.='</table>';

        echo $table;
}

?>






