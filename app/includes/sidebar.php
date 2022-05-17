<?php include('script.php'); ?>
<nav class="navbar navbar-light ">
  <div class="container-fluid">
    <img src="../views/img/logo.png" style="max-width:70px;" alt="">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start rounded" style="background-color:black;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <img src="logo.png" style="max-width:100px;" alt="">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="dropdown mt-3">

          <ul class="navbar-nav  justify-content-end flex-grow-1 pe-3 btn-group" role="group" aria-label="Basic radio toggle button group">
            <li class="nav-item btn  btn-outline-light mb-2 rounded" style="display: flex;justify-content: flex-start">
              <a class="nav-link mask" aria-current="page" href="../views/statistique.php" style="  COLOR: grey; FONT-SIZE: unset;FONT-WEIGHT: bold; font-family: monospace;">
                <i class="fa  fa-3x fa-home " aria-hidden="true"></i><span class="fs-3" style="margin-left: 60px;"> Home</span></a>
            </li>
            <li class="nav-item btn btn-outline-light mb-2 rounded" style="display: flex;justify-content: flex-start">
              <a class="nav-link" href="../views/professeur.php" style="  COLOR: grey; FONT-SIZE: unset;FONT-WEIGHT: bold; font-family: monospace;">
                <i class="fa fa-male  fa-3x" aria-hidden="true"></i><span class="fs-3" style="margin-left: 60px;"> Professeurs</span></a>
            </li>
            <li class="nav-item btn btn-outline-light mb-2 rounded " style="display: flex;justify-content: flex-start">
              <a class="nav-link " href="../views/etudiants.php" style="  COLOR: grey; FONT-SIZE: unset;FONT-WEIGHT: bold; font-family: monospace;">
                <i class="fa fa-3x fa-users" aria-hidden="true"></i><span class="fs-3" style="margin-left: 60px;">Apprennants</span> </a>
            </li>
            <li class="nav-item btn btn-outline-light mb-2 rounded " style="display: flex;justify-content: flex-start">
              <a class="nav-link " href="../views/parent.php" style="  COLOR: grey; FONT-SIZE: unset;FONT-WEIGHT: bold; font-family: monospace;">
                <i class="fa  fa-3x fa-address-card" aria-hidden="true"></i><span class="fs-3" style="margin-left: 60px;">Parents</span> </a>
            </li>
            <li class="nav-item btn btn-outline-light mb-2 rounded " style="display: flex;justify-content: flex-start">
              <a class="nav-link " href="../views/Administrateur.php" style="  COLOR: grey; FONT-SIZE: unset;FONT-WEIGHT: bold; font-family: monospace;">
                <i class="fa fa-3x fa-user" aria-hidden="true"></i><span class="fs-3" style="margin-left: 60px;">Admin</span> </a>
            </li>

            <li class="nav-item btn btn-outline-light   rounded" style="margin-top:65%;" style="display: flex;justify-content: flex-start">
              <a class="nav-link  " href="#" style="  COLOR: grey; FONT-SIZE: unset;FONT-WEIGHT: bold; font-family: monospace;">
                <i class="fa fa-3x fa-sign-out" aria-hidden="true"></i><span class="fs-3" style="margin-left: 60px;">logout</span> </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</nav>
<hr>