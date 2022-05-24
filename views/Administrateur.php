
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>administrateurs</title>
    <style>
       
     .table tbody tr:hover td, .table tbody tr:hover th {
    background-color:#6e42c126;  
      }
 
  

    </style>
</head>
<body>
  
    
    <div class="container-fluid px-5 pt-3">
    <form class="col-sm-6 input-group mb-3" method="POST" style="max-width:500px;">
        <a href="admin.php" class="btn "><i class="fa fa-2x fa-home" aria-hidden="true"></i></a>
        <input type="text" name="search" class="form-control" placeholder="rechercher..." aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" name="find" type="submit" id="button-addon2">search</button>
    </form>
        <div class="row">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #007BFF;font-weight: bold;" class="mb-4">Administrateurs</h2>
                        </div>
                        
                    </div>
                  
                </div>
                <div class="table-responsive">
                <table class="table table align-middle" id="myTable">
                <thead >
                    <tr  class="fw-bold"  style="background-color:#6e42c1aa; height: 53px  ;">
                       
                        <th>Matricule</th>
                        <th>Nom </th>
                        <th>Prénom</th>
                        <th>Rôle</th>
                        <th>Mot de Passe</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody  class="fw-bold">
                <?php 
                    // $admines=new AdministrateurController();
                    //     $admines->getAlladmin();
                    $admine = new AdministrateurController();
                   $admines=$admine->getAlladmin();
                    foreach($admines as $admine){
                           
                ?>
                    <tr>
                        <td><?php echo $admine['Matricule']?></td>
                        <td><?= $admine['Nom'] ?></td>
                        <td><?= $admine['Prénom'] ?></td>
                        <td><?= $admine['Rôle'] ?></td>
                        <td><?= $admine['Mot _de_Passe'] ?></td>
                        <td>
                            <button class="btn btn-outline-primary  fw-bold update" ><a href="" style="  color:primary"  data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a></button>
                            <form action="operation"   onclick="return confirm('Êtes vous sur de vouloir supprimer ??!!');" method="POST" ><button type="submit" name ="deletid" class="btn btn-outline-danger "  data-toggle="modal"><input type="text" hidden name="Matricule" value="<?= $admine['Matricule']?>  "><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></button></form>    

                        </td>
                    </tr>
                   
                  <?php } ?>

                </tbody>
                </table>
            </div>
            </div>
        
        </div>
         <div class="col-sm6 mt-3 " style="float: right;">
         <a href="#addetud" class="btn btn-outline-primary btn-lg fw-bold" style="  color:primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un admine <img src="https://img.icons8.com/fluency/40/000000/teacher.png"/></a>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un  Admine </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="form-container"  action="operation" method="POST" >  
                                    <div class="mb-3 fw-bold" >
                                        <label for="exampleFormControlInput1" class="form-label">Nom </label>
                                        <input type="text" class="form-control" id="nom" name="nom"    placeholder="Enter name complet" style="margin-bottom: 32px;">
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" name="prenom"     placeholder="Enter le Prénom">
             
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Rôle</label><br>
                                        <select name="roleadmin"  id="roleadmine" >
                                           
                                            <option value="admine edudient" >admine edudient </option>
                                            <option value="admine gestion">admine gestion</option>
                                            <option value="admine generale">admine generale</option>
                                        </select>
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Mot de Passe</label>
                                        <input type="password" class="form-control" id="pwd" name="pwd"   placeholder="Mot de Passe">
                                    
                                    </div>
         
                                <div class="modal-footer">
                                        <button type="button" class=" btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="save" class="btn btn-primary ">Save</button>
                                </div>
                            </form>              
                    </div>
                    <div class="modal-footer">
                  
                </div>
            </div>
        </div>
       
        </div>
    </div>



    <div class="col-sm6 mt-3 " style="float: right;">
         <!-- <a href="#addetud" class="btn btn-outline-primary btn-lg fw-bold" style="  color:primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un admine <img src="https://img.icons8.com/fluency/40/000000/teacher.png"/></a> -->
        <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Admine </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="form-container" action="operation" method="POST" >  
                                   <div class="mb-3  fw-bold"  >
                                        <input type="text" class="form-control" hidden name="matricule" id="matricule"    placeholder="Enter le name">
             
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                        <input type="text" class="form-control" name="Name" id="Name"    placeholder="Enter le name">
             
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" name="prenome" id="prenom"    placeholder="Enter le Prénom">
             
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Rôle</label><br>
                                        <select name="roleadmine"  id="roleadmine">
                                           
                                            <option value="admine edudient" class="op1">admine edudient </option>
                                            <option value="admine gestion" class="op1">admine gestion</option>
                                            <option value="admine generale" class="op1">admine gestion</option>
                                        </select>
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="text" class="form-control" name="password" id="password"    placeholder="Enter le Prénom">
             
                                    </div>
         
                                <div class="modal-footer">
                                        <button type="button" class=" btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="updatebtn" class="btn btn-primary ">update</button>
                                </div>
                            </form>              
                    </div>
                    <div class="modal-footer">
                  
                </div>
            </div>
        </div>
       
        </div>
    </div>

      
</body>
</html>

<script>
    $(document).ready(function(){

    $("#myTable").on('click','.update',function(){
        
        var coluodateadmin=$(this).closest("tr"); 
        colmatricul=coluodateadmin.find("td:eq(0)").text();  
        colname=coluodateadmin.find("td:eq(1)").text(); 
        colprenom=coluodateadmin.find("td:eq(2)").text(); 
        colpwd=coluodateadmin.find("td:eq(4)").text(); 
        
        $('#matricule').val(colmatricul);
        $('#Name').val(colname);
        $('#prenom').val(colprenom);
        $('#password').val(colpwd);


        }
       )
    })
</script>