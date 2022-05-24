<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />
    <title>etudiant</title>
    <style>
        .table tbody tr:hover td,
        .table tbody tr:hover th {
            background-color: #28a74646;
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
                            <h2 style="color:#28A745;font-weight: bold;">Etudiants</h2>
                        </div>
                      <div  class="d-flex align-items-baseline  justify-content-between">
                      <form class="col-sm-6 input-group mb-3" method="POST" style="max-width:500px;">
                            <a href="etudiants.php" class="btn "><i class="fa fa-2x fa-home" aria-hidden="true"></i></a>
                            <input type="text" name="search" class="form-control" placeholder="rechercher..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" name="find" type="submit" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        <div>
                        <a href="#addetud" class="btn btn-outline-success btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">add etudiant <img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/65/000000/external-add-user-world-population-day-smashingstocks-circular-smashing-stocks.png" / style="width: 40px;height: 40px;"></a>

                        </div>
                      </div>  
                       
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table align-middle" id="myTable">
                        <thead>
                            <tr style="background-color:#28a746b3;">
                                <th hidden>mat</th>
                                <th>id</th>
                                <th>Nom complet</th>
                                <th>Genre</th>
                                <th>Date naissance</th>
                                <th>Email</th>
                                <th>nom du parent</th>
                                <th>Adresse</th>
                                <th>classe</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                            <pre>
                            <?php
                            $etudiant = new AdministrateurController();
                            $rows = $etudiant->getAllstudent();
                            if ($rows) {
                                foreach ($rows as $id => $row) {
                                  
                            ?>
                            </pre>
                                    <tr>
                                        <td hidden><?php echo $row[0]; ?></td>

                                        <td class="text-nowrap"><?php echo $id + 1; ?></td>
                                        <td class="text-nowrap"><?php echo $row[1]; ?></td>
                                        <td class="text-nowrap"><?php echo $row[2]; ?></td>
                                        <td class="text-nowrap"><?php echo $row[3]; ?></td>
                                        <td class="text-nowrap"><?php echo $row[4]; ?></td>
                                        <td class="text-nowrap"><?php echo $row[5]; ?></td>
                                        <td class="text-nowrap"><?php echo $row[6]; ?></td>
                                        <td class="text-nowrap"><?php echo $row[7]; ?></td>

                                        <td class="d-flex  align-items-start">
                                            <a href="" class="btn btn-outline-primary btn-lg fw-bold update" style="  color:primary" data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                            <form action="operation" method="POST" ><button type="submit" name ="delete" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal"><input type="text" hidden name="Matricule" value="<?= $row[0]?>"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"></button></form>    
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm6 mt-3 " style="float: right;">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add etudiant</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-container" action="operation" id="form1" method="POST" data-parsley-validate>
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="nom" name="Nom_complet" placeholder="Enter name complet" style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Genre</label><br>
                                    <select name="Genre" class="form-control" id="Genre" required data-parsley-trigger="change">
                                        <option value="Femme">Femme</option>
                                        <option value="Homme">Homme</option>
                                    </select>
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Date naissance</label>
                                    <input type="date" class="form-control" id="datenec" name="Date_naissance" placeholder="Enter phone" required data-parsley-trigger="change">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" data-parsley-type="email" class="form-control" id="email" name="Email" placeholder="Enter Email" required data-parsley-trigger="change">
                                </div>
                            
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom du parent</label>
                                    <select class="form-control" type="text" id="parent" name="parent">
                                    <?php $row =$etudiant->getAllParent();foreach ($row as  $row) {?>
                                         <option value="<?php echo $row[0]; ?>"><?php echo $row[1];} ?> </option>
                                
                                </select>
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Classe</label>
                                <select class="form-control" type="text" id="classe" name="id_class">
                                    <?php $rows =$etudiant->getclass();  foreach ($rows as  $row) { ?>
                                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; } ?> </option>
                                </select>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <div class="invalid-form-error-message"></div>
                                    <button type="submit" name="submit" class="btn btn-success mT-">Save</button>
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
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Admine </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-container" id="form" action="operation" method="POST">
                                <div class="mb-3 fw-bold">
                                    <input type="text" hidden class="form-control" id="matricule" name="matricul" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                </div>
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                </div>
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                    <select name="gen" class="form-control" id="gen" >
                                        <option value="Femme">Femme</option>
                                        <option value="Homme">Homme</option>
                                    </select>
                                </div>
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">dateN</label>
                                    <input type="text" class="form-control" id="dateN" name="daten" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                </div>
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="Email" name="Emai" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">NOM Parent</label><br>
                                    <select class="form-control" type="text" id="NAMEP" name="NAMEP">
                                    <?php $row =$etudiant->getAllParent();foreach ($row as  $row) {?>
                                         <option value="<?php echo $row[0]; ?>"><?php echo $row[1];} ?> </option>
                                
                                </select>
                                    </select>
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Class</label><br>
                                    <select class="form-control" type="text" name ="cla" id="cla">
                                    <?php $rows =$etudiant->getclass();  foreach ($rows as  $row) { ?>
                                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; } ?> </option>
                                </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="updateetudinat" class="btn btn-success mT-3">Update</button>
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
    $(document).ready(function() {
        $("#myTable").on('click', '.update', function() {
            var currentRow = $(this).closest("tr");
            colM = currentRow.find("td:eq(0)").text();
            col0 = currentRow.find("td:eq(2)").text();
            col1 = currentRow.find("td:eq(3)").text();
            col3 = currentRow.find("td:eq(4)").text();
            $('#matricule').val(colM);
            $('#Name').val(col0);
            $('#gen').val(col1);
            $('#dateN').val(col3);
            $('#Email').val(currentRow.find("td:eq(5)").text());
            $('#NAMEP').val(currentRow.find("td:eq(6)").text());
            $('#ads').val(currentRow.find("td:eq(7)").text());
            $('#cla').val(currentRow.find("td:eq(8)").text());
        })
    })
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>