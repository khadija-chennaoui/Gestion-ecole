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
                        <img src="views/img/eleves.jpg" class="card-img" alt="..." width="300px">
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
                        <img src="views/img/class.jpg" class="card-img" alt="..." width="300px">
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
var xValues = ["male","female"];
var yValues = [7,8];
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
  options:{}
});


<?php $stati = new AdministrateurController();?>


</script>


<script>
var xValues = ["Etudiabt", "France", "Spain", "USA", "Argentina"];
var yValues = [<?php echo $stati->countstudent();?>, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

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
      text: "World Wine Production 2018"
    }
  }
});
</script>

</body>
