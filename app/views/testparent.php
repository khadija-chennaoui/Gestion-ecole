 
 <?php require_once('../models/parent.php')?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
     

  
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parents</title>
    <style>
       
     .table tbody tr:hover td, .table tbody tr:hover th {
    background-color: #fd7d1457;
    
}
    </style>
</head>
<body>
    <nav>

</nav>
    <div class="container-fluid px-5 pt-3">
        <div class="row">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #FD7E14;font-weight: bold;">Parents</h2>
                        </div>
                       
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table table-striped table align-middle   " id="myTable">
                <thead>
                 
                    <tr style="background-color:#fd7d1487; height: 53px;">
                       
                        <th>Matricule</th>
                        <th>Nom complet</th>
                        <th>Genre</th>
                        <th>job</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody  class="fw-bold" >
                <?php $test = new Parents();
                $rest=$test->Afficher();
                    foreach(    $rest as $x => $rows){
                        
                      
                    ?>
                    <tr >
                       <td hidden data-target="id"> <?= $rows['Matricule']; ?> </td>
                        <td><?=   $x+1;?></td>
                        <td data-target="nomcomplet"><?= $rows['Nom_complet']?></td>
                        <td data-target="genre"><?= $rows['Genre']?></td>
                       
                        <td data-target="job"><?= $rows['Job']?></td>
                        <td data-target="adrs"><?= $rows['Adresse']?></td>
                        <td data-target="phone"><?= $rows['Phone']?></td>
                        <td>
                            <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></a>
                            <!-- <td><input type="button" name="edit" value="Edit" class="btn btn-info btn-xs edit_data" /></td>   -->
                           <td><input type="button" name="edit" value="editmodel" class="btn btn-primary edit_data update" id="<?php echo $rows['Matricule'];?>" data-toggle="modal" data-target="#myModel"></td>
                            <a href="#addetud"   class="btn btn-outline-success edit_data" data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                        </td>
                    </tr>
                       <?php }?>

                </tbody>
                </table>
            </div>
          
           
</body>
</html>

<?php 

$test = new Parents();
if(isset($_POST['edit'])){
    $test->setMatricule($id);
    $test->Selectone();
}

?>


<div class="modal fade" id="myModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="info_update">
      <form class="form-container" action="operation.php" method="POST">  
                                   <div class="mb-3 fw-bold" >
                                        <label for="exampleFormControlInput1" class="form-label">id</label>
                                        <input type="text" class="form-control" id="matricule" name="matricule"  style="margin-bottom: 32px;">
                                        <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                        <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                    </div>
                                    <div class="mb-3 fw-bold" >
                                        <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                        <input type="text" class="form-control" id="nom" name="nom"  style="margin-bottom: 32px;">
                                        <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                        <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter le Genre">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="genreid" style="color:red; font-weight: bold;"></span>
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Job</label>
                                        <input type="text" class="form-control" id="Job" name="Job" placeholder="Enter le Job">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="Jobid" style="color:red; font-weight: bold;"></span>
                                    </div>
                                    <div class="mb-3  fw-bold" >
                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                        <span id="addressid"  class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                        <textarea class="form-control" id="adress" name="adres" rows="3"></textarea>
                                        <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span>
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="Phone" placeholder="Enter phone">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="Phoneid" style="color:red; font-weight: bold;"></span>
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="bntupdate" class="btn btn-primary">update</button>
      </div>
    </div>
  </div>
</div>
 

 <script>  
$(document).ready(function(){

    $("#myTable").on('click','.update',function(){

    var currentRow=$(this).closest("tr"); 

         var col0=currentRow.find("td:eq(0)").text(); 
         
         var col1=currentRow.find("td:eq(2)").text(); 
         var col2=currentRow.find("td:eq(3)").text(); 
         var col3=currentRow.find("td:eq(4)").text(); 
         var col4=currentRow.find("td:eq(5)").text();         
          var col5=currentRow.find("td:eq(6)").text(); 


          $('#matricule').val(col0);
         $('#nom').val(col1);
        $('#genre').val(col2);
        $('#Job').val(col3);
        $('#adress').val(col4);
        $('#phone').val(col5);


        // $('#myModel').model('toggle');
});
});



 </script>