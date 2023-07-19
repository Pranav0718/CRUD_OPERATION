<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud wirh ajax</title>

    <!-- bootstrap cdn --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>


                


<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="form-group">
      <label for="completename">Name</label>
      <input type="text" class="form-control" id="completename" placeholder="Enter Name">
      </div>

      <div class="form-group">
      <label for="completemail">Email</label>
      <input type="email" class="form-control" id="completemail" placeholder="Enter Email">
      </div>

      <div class="form-group">
      <label for="completemobile">mobile</label>
      <input type="text" class="form-control" id="completemobile" placeholder="Enter mobile">
      </div>

      <div class="form-group">
      <label for="completeplace">place</label>
      <input type="text" class="form-control" id="completeplace" placeholder="Enter place">
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
      </div>
    </div>
  </div>
</div>

                     
<!-- update modal-->

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="form-group">
      <label for="updatename">Name</label>
      <input type="text" class="form-control" id="updatename" placeholder="Enter Name">
      </div>

      <div class="form-group">
      <label for="updatemail">Email</label>
      <input type="email" class="form-control" id="updatemail" placeholder="Enter Email">
      </div>

      <div class="form-group">
      <label for="updatemobile">mobile</label>
      <input type="text" class="form-control" id="updatemobile" placeholder="Enter mobile">
      </div>

      <div class="form-group">
      <label for="updateplace">place</label>
      <input type="text" class="form-control" id="updateplace" placeholder="Enter place">
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="updateDetails()">Update</button>
        <input type="hidden" id="hiddendata">
      </div>
    </div>
  </div>
</div>

                  


<!-- Button trigger modal -->

            <div class="container my-3">
                <h1 class="text-center"> CRUD WITH AJAX </h1>
                <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
                 ADD USER</button>
                 <div id="displayDataTable"></div>

            </div>

    
         <!-- bootstrap javascript cdn --> 
       <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script>

  $(document).ready(function(){
    displayData();
  });       
// display function

 function displayData(){

  var displayData="true";

  $.ajax({

      url:"display.php",
      type:'POST',
      data:{
         displaySend:displayData
      },
      success:function(data,status){
         console.log(data);
        $('#displayDataTable').html(data);
      }

  })


 }


  function adduser(){

    var nameAdd = $("#completename").val();
    var emailAdd = $("#completemail").val();
    var mobileAdd = $("#completemobile").val();
    var placeAdd = $("#completeplace").val();

   
    
    $.ajax({

    

      url:"insert.php",
      type:'POST',

      // data: JSON.stringify({ nameSend:nameAdd, emailSend:emailAdd, mobileSend:mobileAdd, placeSend:placeAdd,}),
      //   dataType: "json",


        // data: {nameSend:nameAdd, emailSend:emailAdd, mobileSend:mobileAdd, placeSend:placeAdd },
        // dataType: "json",


       // data: $.param({nameSend:nameAdd, emailSend:emailAdd, mobileSend:mobileAdd, placeSend:placeAdd }), // <-- use $.param to properly format your data


// data: JSON.stringify({nameSend:nameAdd, emailSend:emailAdd, mobileSend:mobileAdd, placeSend:placeAdd }), // <-- stringify your data before passing it to $.ajax
//  contentType: 'application/json', // <-- set the proper Content-Type header

//  var dataReq={ nameSend:nameAdd, emailSend:emailAdd, mobileSend:mobileAdd, placeSend:placeAdd};
// data: dataReq,


      data:{
        nameS:nameAdd,
        emailS:emailAdd,
        mobileS:mobileAdd,
        placeS:placeAdd
      },

      success:function(data,status){
        // alert("data: "+ data);
        // console.log(status);

        $('#completeModal').modal('hide');

        
        displayData();
      }

    });

  }
// delete record


  function deleteUser(deleteid){
    $.ajax({

      url: "delete.php",
      type:'POST',
      data:{
        
        deletesend:deleteid
      },
      success:function(data,status){
        displayData();
      }



    });
  }

  //update function to get data on field

  function getDetails(updateid){

    $('#hiddendata').val(updateid);

    $.post("update.php",{updateid:updateid},function(data,status){

      var userid =JSON.parse(data);
      $('#updatename').val(userid.name);
      $('#updatemail').val(userid.email);
      $('#updatemobile').val(userid.mobile);
      $('#updateplace').val(userid.place);    
    })

    $('#updateModal').modal('show');

  }

//update function

function updateDetails(){

    var updatename = $('#updatename').val();
    var updatemail = $('#updatemail').val();
    var updatemobile = $('#updatemobile').val();
    var updateplace = $('#updateplace').val();
    var hiddendata = $('#hiddendata').val();

    $.post("update.php",{
      updatename:updatename,
      updatemail:updatemail,
      updatemobile:updatemobile,
      updateplace:updateplace,
      hiddendata:hiddendata
    },function(data,status){


      $('#updateModal').modal('hide');
      displayData();


    });




}

  

</script>


</body>
</html>