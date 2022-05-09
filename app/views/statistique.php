<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container-fluid">
    <div class="d-block">
        
    <?php include('../includes/sidebar.php') ?>
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
            <div class="col">
                <div class="card" class="contenant" style="width:258px;margin:12%;padding:0%;">
                    <div class="card bg-dark text-white">
                        <img src="../views/img/profs.jpg" class="card-img" alt="..." width="300px">
                        <div class="card-img-overlay">
                            <div class="mt-3 mx-3" style="background-color:rgb(255 255 254 / 61%);">
                                <h5 class="card-title mt-5 text-dark ">Card title</h5>
                                <p class="card-text text-dark fs-5 mx-5">250</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" class="contenant" style="width:258px;margin:12%;padding:0%;">
                    <div class="card bg-dark text-white">
                        <img src="../views/img/eleves.jpg" class="card-img" alt="..." width="300px">
                        <div class="card-img-overlay">

                            <div class="mt-3 mx-3" style="background-color:rgb(255 255 254 / 61%);">
                                <h5 class="card-title mt-5 text-dark ">Card title</h5>
                                <p class="card-text text-dark fs-5 mx-5">250</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" class="contenant" style="width:258px;margin:12%;padding:0%;">
                    <div class="card bg-dark text-white">
                        <img src="../views/img/class.jpg" class="card-img" alt="..." width="300px">
                        <div class="card-img-overlay">
                            <div class="mt-3 mx-3" style="background-color:rgb(255 255 254 / 61%);">
                                <h5 class="card-title mt-5 text-dark ">Card title</h5>
                                <p class="card-text text-dark fs-5 mx-5">250</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center mt-5 pt-5">
            <div class="circle">
                <div></div>
            </div>
        </div>
        <div class="d-block mt-5 pt-4">
            <div class="d-flex justify-content-center mb-3">
                <div class="pourcentage" style="border: 20px solid #6F42C1;"></div>
                <p class="mx-3 mt-2">30% Homme</p>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <div class="pourcentage"style="border: 20px solid #FD8520;"></div>
                <p class="mx-3 mt-2 ">60% Femme</p>
            </div>
        </div>
    </div>
    </div>
</body>