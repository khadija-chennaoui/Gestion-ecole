
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/sidebar.css">
    <title>professeurs</title>
    <style>
        .table tbody tr:hover td,
        .table tbody tr:hover th {
            background-color: #007bff31;

        }
    </style>
</head>

<body>

    <div class="container-fluid px-5 pt-3">
        <div class="row">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6">
                            <h2 style="color: #007BFF;font-weight: bold;">Professeurs</h2>
                        </div>


                        <form class="col-sm-6 input-group mb-3" method="POST" style="max-width:500px;">
                            <a href="professeur" class="btn "><i class="fa fa-2x fa-home" aria-hidden="true"></i></a>
                            <input type="text" name="search" class="form-control" placeholder="rechercher..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" name="find" type="submit" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table align-middle" id="myTable">
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
                        <tbody class="fw-bold">
                            <?php
                            $prof = new AdministrateurController();
                            $prof = $prof->getAllprofesseur();

                            foreach ($prof as $professeur) {
                                echo '
                                        <tr>
                                            <td>' . $professeur['Matricule'] . '</td>
                                            <td>' . $professeur['Nom_complet'] . '</td>
                                            <td>' . $professeur['Genre'] . '</td>
                                            <td>' . $professeur['class_prof'] . '</td>
                                            <td>' . $professeur['Matière'] . '</td>
                                            <td>' . $professeur['Phone'] . '</td>
                                            
                                            <td>
                                            <a href="#?id_prof_E='.$professeur['Matricule'].'" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary" data-bs-toggle="modal" data-bs-target="#myModel"><img  src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                                            
                                            <form action="operation" method="POST" > <button type="submit" name="deletprof" value="' .$professeur['Matricule']. '" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"></button> </form>
                                                
                                            </td>
                                        </tr>
                                        
                                        ';
                            }




                            ?>
                        </tbody>
                    </table>
                    <?php  
                     $prof = new AdministrateurController();
                     $prof = $prof->getAllprofesseur();
                     if(!$prof)
                     {
                         $error=' <div class="alert alert-danger" role="alert"> not found!!! </div>';
                     }
                     else $error='';
                     
                    echo $error; ?>

                </div>
            </div>

        </div>
        <div class="col-sm6 mt-3 " style="float: right;">
            <a href="#addetud" class="btn btn-outline-info btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter des professeurs <img src="https://img.icons8.com/fluency/40/000000/teacher.png" /></a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter les administrateurs </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-container" action="operation" method="POST" onsubmit="return validation()">
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                    <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                    <span id="nomid" class="mt-5 text-danger" style="font-weight: bold;"></span>
                                </div>

                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                    <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter le Genre">
                                    <p id="img2" style="margin-bottom: -1rem;"></p>
                                    <span id="genreid" style="color:red; font-weight: bold;"></span>
                                </div>

                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">class</label>
                                    <select type="text" class="form-control" id="class" name="class" placeholder="Enter le class">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    </select>
                                    <p id="img2" style="margin-bottom: -1rem;"></p>
                                    <span id="classid" style="color:red; font-weight: bold;"></span>
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Matière</label>
                                    <input type="text" class="form-control" id="class" name="matière" placeholder="Enter le Matière">
                                    <p id="img2" style="margin-bottom: -1rem;"></p>
                                    <span id="Matièreid" style="color:red; font-weight: bold;"></span>
                                </div>

                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                                    <p id="img2" style="margin-bottom: -1rem;"></p>
                                    <span id="phoneid" style="color:red; font-weight: bold;"></span>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="save3" class="btn btn-info mT-3">Save</button>
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
        <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une  prof </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="form-container" action="operation" method="POST" >  
                                   <div class="mb-3  fw-bold"  >
                                        <input type="text" class="form-control" style="visibility : hidden;"  name="matricule" id="matricule"    placeholder="Enter le name">
             
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                        <input type="text" class="form-control" name="Name" id="Name"    placeholder="Enter le name">
             
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                        <input type="text" class="form-control" name="gnr" id="gnr"    placeholder="Enter le name">
             
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Class</label>
                                        <select type="text" class="form-control" name="cl" id="cl"    placeholder="Enter le Prénom">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        </select>
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Matière</label>
                                        <input type="text" class="form-control" name="Matier" id="Matier"    placeholder="Enter le Prénom">
             
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="tele" id="tele"    placeholder="Enter le Prénom">
             
                                    </div>
         
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="save2" class="btn btn-primary mT-3">Save</button>
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
     
        
        $('#matricule').val(colmatricul);
        $('#Name').val(colname);
        $('#gnr').val(coluodateadmin.find("td:eq(2)").text());
        $('#cl').val(coluodateadmin.find("td:eq(3)").text());
        $('#Matier').val(coluodateadmin.find("td:eq(4)").text());
        $('#tele').val(coluodateadmin.find("td:eq(5)").text());



})
})
</script>