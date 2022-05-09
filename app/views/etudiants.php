<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>etudiant</title>
    <style>
       
     .table tbody tr:hover td, .table tbody tr:hover th {
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
                        <th>classe</th>
                        <th>parents</th>
                        <th>Address</th>
                        <th>Date naissance</th>
                        <th>Email</th>
                        <th>nom du parent</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>soumia </td>
                        <td> 3</td>
                        <td>Peresoumia</td>
                        <td>address123</td>
                        <td>01/03/2001</td>
                        <td>souma@gmail.com</td>
                        <td>paresouma</td>
                        <td>
                            <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></a>
                            <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>khadija</td>
                        <td> 3</td>
                        <td>Perenouhaila</td>
                        <td>address123</td>
                        <td>01/03/2001</td>
                        <td>nouhaila@gmail.com</td>
                        <td>parenouhaila</td>
                        <td>
                            <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></a>
                            <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>nouhaila</td>
                        <td> 3</td>
                        <td>Perenouhaila</td>
                        <td>address123</td>
                        <td>01/03/2001</td>
                        <td>nouhaila@gmail.com</td>
                        <td>parenouhaila</td>
                        <td>
                            <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></a>
                            <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>dounia</td>
                        <td> 3</td>
                        <td>Peredounia</td>
                        <td>address123</td>
                        <td>01/03/2001</td>
                        <td>dounia@gmail.com</td>
                        <td>Peredounia</td>
                        <td>
                            <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></a>
                            <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>oumaima</td>
                        <td> 3</td>
                        <td>Pereoumaima</td>
                        <td>address123</td>
                        <td>01/03/2001</td>
                        <td>oumaima@gmail.com</td>
                        <td>paresouma</td>
                        <td>
                            <a href="#addetud" class="btn btn-outline-danger " data-toggle="modal"><img src="https://img.icons8.com/color/20/000000/delete-forever.png"/></a>
                            <a href="#addetud" class="btn btn-outline-success " data-toggle="modal"><img src="https://img.icons8.com/fluency/20/000000/edit-user-female.png"/></a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        
        </div>
         <div class="col-sm6 mt-3 " style="float: right;">
                <a href="#addetud" class="btn btn-outline-success btn-lg" data-toggle="modal">add etudiant <img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/65/000000/external-add-user-world-population-day-smashingstocks-circular-smashing-stocks.png"/ style="width: 40px;height: 40px;"></a>
        </div>
    </div>
           
</body>
</html>