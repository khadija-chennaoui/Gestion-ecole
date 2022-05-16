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
    <nav>
        <?php include('../includes/sidebar.php') ?>
    </nav>
    <div class="container-fluid px-5 pt-3">
        <div class="row">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="color: #28A745;font-weight: bold;">Etudiants</h2>
                        </div>
                        <!-- <div class="col-sm6">
                            <a href="#addetud" class="btn btn-outline-success btn-lg" data-toggle="modal">add etudiant <img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/65/000000/external-add-user-world-population-day-smashingstocks-circular-smashing-stocks.png"/ style="width: 40px;height: 40px;"></a>
                        </div> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table align-middle   ">
                        <thead>
                            <tr style="background-color:#28a746b3;">

                                <th>Matricule</th>
                                <th>Nom complet</th>
                                <th>Genre</th>
                                <th>classe</th>
                                <th>parents</th>
                                <th>Address</th>
                                <th>Date naissance</th>
                                <th>Email</th>
                                <th>nom du parent</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                            <tr>
                                <td>1</td>
                                <td>soumia </td>
                                <td>f</td>
                                <td> 3</td>
                                <td>Peresoumia</td>
                                <td>address123</td>
                                <td>01/03/2001</td>
                                <td>souma@gmail.com</td>
                                <td>paresouma</td>
                                <td>
                                    <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png" /></a>
                                    <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>khadija</td>
                                <td>f</td>
                                <td> 3</td>
                                <td>Perenouhaila</td>
                                <td>address123</td>
                                <td>01/03/2001</td>
                                <td>nouhaila@gmail.com</td>
                                <td>parenouhaila</td>
                                <td>
                                    <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png" /></a>
                                    <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>nouhaila</td>
                                <td>f</td>
                                <td> 3</td>
                                <td>Perenouhaila</td>
                                <td>address123</td>
                                <td>01/03/2001</td>
                                <td>nouhaila@gmail.com</td>
                                <td>parenouhaila</td>
                                <td>
                                    <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png" /></a>
                                    <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>dounia</td>
                                <td>f</td>
                                <td> 3</td>
                                <td>Peredounia</td>
                                <td>address123</td>
                                <td>01/03/2001</td>
                                <td>dounia@gmail.com</td>
                                <td>Peredounia</td>
                                <td>
                                    <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png" /></a>
                                    <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>oumaima</td>
                                <td>f</td>
                                <td> 3</td>
                                <td>Pereoumaima</td>
                                <td>address123</td>
                                <td>01/03/2001</td>
                                <td>oumaima@gmail.com</td>
                                <td>paresouma</td>
                                <td>
                                    <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png" /></a>
                                    <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png" /></a>
                                </td>
                            </tr>
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
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name complet" style="margin-bottom: 32px;">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Date naissance</label>
                                    <input type="date" class="form-control" id="datenec" name="datenec" placeholder="Enter phone">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Classe</label>
                                    <input type="text" class="form-control" id="classe" name="classe" placeholder="Enter classe">
                                </div>

                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom du parent</label>
                                    <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter le nom des parents">
                                </div>
                                <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <span id="addressid" class="mt-5 text-danger" style="font-weight: bold;"></span>
                                    <textarea class="form-control" id="adress" name="adres" rows="3"></textarea>
                                </div>
                               
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="save" class="btn btn-success mT-3">Save</button>
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