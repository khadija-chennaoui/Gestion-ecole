<?php include('../models/professeur.php');
$error='';
if(isset($_POST['save']))
{
    $test = new professeur();
    $test->setNom($_POST['nom']);
    $test->setGenre($_POST['genre']);
    $test->matière=$_POST['matière'];
    $test->phone=$_POST['phone'];
    $test->class_prof=$_POST['class'];
   
   
    $test->insert();
}
  
if(isset($_POST['find']))
{
    $data=new professeur();
    $professeur=$data->view();
    if(!$professeur)
    {
        $error=' <div class="alert alert-danger" role="alert"> not found!!! </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>professeurs</title>
    <style>
       
     .table tbody tr:hover td, .table tbody tr:hover th {
    background-color:#007bff31;
    
}
    </style>
</head>
<body>
    <nav>
    <?php include('../includes/sidebar.php') ?>
    </nav>
    <div class="container-fluid px-5 pt-3">
        <div class="row">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <h2 style="color: #007BFF;font-weight: bold;">Professeurs</h2>
                        </div>
                      

                        <form class="col-sm-6 input-group mb-3" method="POST" style="max-width:500px;">
                            <a href="professeur.php" class="btn "><i class="fa fa-2x fa-home" aria-hidden="true"></i></a>
                            <input type="text" name="search" class="form-control" placeholder="rechercher..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" name="find" type="submit" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table table-striped table align-middle   ">
                <thead>
                    <tr style="background-color:#007bff93; height: 53px;">
                       
                        <th>Matricule</th>
                        <th>Nom complet</th>
                        <th>Genre</th>
                        <th>class</th>
                        <th>Matière</th>
                        <th>Phone</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody  class="fw-bold" >
                <?php
                                $prof=new professeur();
                                $prof=$prof->view();
                                
                                    foreach ($prof as $professeur ) 
                                    {
                                        echo'
                                        <tr>
                                            <td>'.$professeur['Matricule'].'</td>
                                            <td>'.$professeur['Nom_complet'].'</td>
                                            <td>'.$professeur['Genre'].'</td>
                                            <td>'.$professeur['class_prof'].'</td>
                                            <td>'.$professeur['Matière'].'</td>
                                            <td>'.$professeur['Phone'].'</td>
                                            
                                            <td>
                                                <a href="../models/opération.php?id_prof_D='.$professeur['Matricule'].'" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></a>
                                                <a href="../models/opération.php?id_prof_E='.$professeur['Matricule'].'" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                                            </td>
                                        </tr>
                                        
                                        ';
                                    }
                                   
                                
              
                
                ?>
                </tbody>
                </table>
                <?php echo $error; ?>
                
            </div>
            </div>
        
        </div>
         <div class="col-sm6 mt-3 " style="float: right;">
         <a href="#addetud" class="btn btn-outline-info btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter des professeurs <img src="https://img.icons8.com/fluency/40/000000/teacher.png"/></a>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter les administrateurs </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="form-container"  method="POST" onsubmit="return validation()">  
                                    <div class="mb-3 fw-bold" >
                                        <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name complet" style="margin-bottom: 32px;">
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
                                        <label for="exampleFormControlInput1" class="form-label">class</label>
                                        <input type="text" class="form-control" id="class" name="class" placeholder="Enter le class">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="classid" style="color:red; font-weight: bold;"></span>
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Matière</label>
                                        <input type="text" class="form-control" id="class" name="matière" placeholder="Enter le Matière">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="Matièreid" style="color:red; font-weight: bold;"></span>
                                    </div>
                                  
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="phoneid" style="color:red; font-weight: bold;"></span>
                                    </div>
         
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="save" class="btn btn-info mT-3">Save</button>
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