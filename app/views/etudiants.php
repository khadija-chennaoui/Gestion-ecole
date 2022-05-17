<?php include('../models/étudiant.php');
$mode = new Etudiant();
if (isset($_POST['submit'])) {
    $nom = $_POST['Nom_complet'];
    $genre = $_POST['Genre'];
    $nee = $_POST['Date_naissance'];
    $email = $_POST['Email'];
    $parent = 1;
    $clas = $_POST['id_class'];
    $insert = $mode->ajouteretudiant($nom, $genre, $nee, $email, $parent, $clas);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etudiant</title>
    <style>
        .table tbody tr:hover td,
        .table tbody tr:hover th {
            background-color: #28a74646;
        }
    </style>
</head>
<body>
   
        <?php include('../includes/sidebar.php'); ?>
    
    <div class="container-fluid px-5 pt-3">
        <div class="row">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color:#28A745;font-weight: bold;">Etudiants</h2>
                        </div>
                        <!-- <div class="col-sm6">
                            <a href="#addetud" class="btn btn-outline-success btn-lg" data-toggle="modal">add etudiant <img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/65/000000/external-add-user-world-population-day-smashingstocks-circular-smashing-stocks.png"/ style="width: 40px;height: 40px;"></a>
                        </div> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table align-middle">
                        <thead>
                            <tr style="background-color:#28a746b3;">
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
                            <?php
                            $rows = $mode->affichetudiant();
                            if ($rows) {
                                foreach ($rows as $id=> $row) {
                            ?>
                                    <tr>
                                    <td class="text-nowrap text-center"><?php echo $id+1;?></td>
                                        <td class="text-nowrap text-center"><?php echo $row[1]; ?></td>
                                        <td class="text-nowrap text-center"><?php echo $row[2]; ?></td>
                                        <td class="text-nowrap text-center"><?php echo $row[3]; ?></td>
                                        <td class="text-nowrap text-center"><?php echo $row[4]; ?></td>
                                        <td class="text-nowrap text-center"><?php echo $row[5]; ?></td>
                                        <td class="text-nowrap text-center"><?php echo $row[6]; ?></td>
                                        <td class="text-nowrap text-center"><?php echo $row[7]; ?></td>
                                        
                                        <td class="text-nowrap text-center">
                                            <a href="edit.php?id=" class="badge bg-success">Edit</a>
                                            <a href="../views/operation.php?id=<?php echo $row[0];?>" class="badge bg-danger">Delete</a>
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
            <a href="#addetud" class="btn btn-outline-success btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">add etudiant <img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/65/000000/external-add-user-world-population-day-smashingstocks-circular-smashing-stocks.png" / style="width: 40px;height: 40px;"></a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add etudiant</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-container" action="" method="POST" onsubmit="return validation()">
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="nom" name="Nom_complet" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                </div>
                                <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                    <input type="text" class="form-control" id="Genre" name="Genre" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Date naissance</label>
                                    <input type="date" class="form-control" id="datenec" name="Date_naissance" placeholder="Enter phone">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="Email" placeholder="Enter Email">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Classe</label>
                                    <input type="text" class="form-control" id="classe" name="id_class" placeholder="Enter classe">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom du parent</label>
                                    <input type="text" class="form-control" id="genre" name="parent" placeholder="Enter le nom des parents">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-success mT-3">Save</button>
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