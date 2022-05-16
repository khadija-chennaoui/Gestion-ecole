<?php include('script.php'); ?>

<body>
  <nav class="navbar navbar-light ">
    <div class="container-fluid">
      <img src="../views/img/logo.png" style="max-width:100px;" alt="">
      <a class="navbar-brand" href="#"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-start rounded" style="background-color:#9573D4;   box-shadow: 5px 5px 8px #FF99AC, 10px 10px 8px lightblue, 15px 15px 8px #9573D4;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <img src="logo.png" style="max-width:100px;" alt="">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

          <div class="dropdown mt-3">

            <ul class="navbar-nav  justify-content-end flex-grow-1 pe-3 btn-group" role="group" aria-label="Basic radio toggle button group">
              <li class="nav-item btn  btn-outline-light mb-2 rounded">
                <a class="nav-link " aria-current="page" href="#"><i class="fa  fa-3x fa-home" aria-hidden="true"></i><span class="fs-3"> Home</span></a>
              </li>
              <li class="nav-item btn btn-outline-light mb-2 rounded">
                <a class="nav-link" href="#"><i class="fa fa-male  fa-3x" aria-hidden="true"></i><span class="fs-3"> Professeurs</span></a>
              </li>
              <li class="nav-item btn btn-outline-light mb-2 rounded ">
                <a class="nav-link " href="#"><i class="fa fa-3x fa-users" aria-hidden="true"></i><span class="fs-3">Apprennants</span> </a>
              </li>
              <li class="nav-item btn btn-outline-light mb-2 rounded ">
                <a class="nav-link " href="#"><i class="fa  fa-3x fa-address-card" aria-hidden="true"></i><span class="fs-3">Parents</span> </a>
              </li>

              <li class="nav-item btn btn-outline-light   rounded" style="margin-top:90%;">
                <a class="nav-link  " href="#"><i class="fa fa-3x fa-sign-out" aria-hidden="true"></i><span class="fs-3">logout</span> </a>
              </li>
            </ul>
          </div>
        </div>
      </div>





    </div>
  </nav>
  <!-- <div class="mx-5 my-5 py-1"  style=" background-color: #15d7ed; background-image: linear-gradient(160deg, #15d7ed 0%, #C850C0 30%, #eef1ea 66%, #ed8f06 100%);">
  
    <div style="background-color:white; " class=" mx-1 ">
   <div>pre</div>
   

    </div>
</div> -->
  <hr>
</body>