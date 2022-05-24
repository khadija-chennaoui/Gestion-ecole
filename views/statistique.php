<?php $stati = new AdministrateurController();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../views/css/style.css">
</head>

<body>
<div class="container-fluid">
    <div class="d-block">
        
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
            <div class="col">
                <div class="card" class="contenant" style="width:258px;margin:12%;padding:0%;">
                    <div class="card bg-dark text-white">
                        <img src="views/img/profs.jpg" class="card-img" alt="..." width="300px">
                        <div class="card-img-overlay">
                            <div class="mt-3 mx-3" style="background-color:rgb(255 255 254 / 61%);">
                                <h5 class="card-title mt-5 text-dark ">Professeur</h5>
                                <p class="card-text text-dark fs-5 mx-5"><?php echo count($stati->getAllstudent());?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" class="contenant" style="width:258px;margin:12%;padding:0%;">
                    <div class="card bg-dark text-white">
                        <img src="views/img/eleves.jpg" class="card-img" alt="..." width="300px">
                        <div class="card-img-overlay">

                            <div class="mt-3 mx-3" style="background-color:rgb(255 255 254 / 61%);">
                                <h5 class="card-title mt-5 text-dark ">Etudiants</h5>
                                <p class="card-text text-dark fs-5 mx-5"><?php echo count($stati->getAllprofesseur());?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" class="contenant" style="width:258px;margin:12%;padding:0%;">
                    <div class="card bg-dark text-white">
                        <img src="views/img/class.jpg" class="card-img" alt="..." width="300px">
                        <div class="card-img-overlay">
                            <div class="mt-3 mx-3" style="background-color:rgb(255 255 254 / 61%);">
                                <h5 class="card-title mt-5 text-dark ">Class</h5>
                                <p class="card-text text-dark fs-5 mx-5"><?php echo count($stati->getclass());?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center mt-5">
             <div class="  col-6 ">
        <canvas id="Chart" style="width:100%;max-width:700px ;"></canvas>

        </div>
       
        <div class=" col-6 ">
        <canvas id="myChart" style="width:100%;max-width:700px ;"></canvas>

        </div>
        </div>
       
       
        
    </div>
    </div>
    <script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<script>
    <?php $femme = $stati->GenreprofesseursF()+$stati->GenreEtudiantF();
           $Homme = $stati->GenreprofesseursH()+$stati->GenreEtudiantH() ?>
var xValues = ["Femme","Homme"];
var yValues = [<?= $femme?>,<?= $Homme?>];
var colors=['red','orange'];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: colors,
      borderColor: colors,
      data: yValues
    }]
  },
});





</script>


<script>
var xValues = ["Etudiant", "Professeur", "Class"];
var yValues = [<?php echo count($stati->getAllstudent());?>, <?php echo count($stati->getAllprofesseur());?>, <?php echo count($stati->getclass());?>,0];
var barColors = ["red", "green","blue"];

new Chart("Chart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Ecole"
    }
  }
});
</script>

</body>
