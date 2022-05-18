        
<div class="modal fade" id="myModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="info_update">
      <form class="form-container" action="operation.php" method="POST">  
                                   <div class="mb-3 fw-bold" >
                                        <input type="text" hidden class="form-control" id="matricule" name="matricule"  style="margin-bottom: 32px;">
                                        <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                        <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                    </div>
                                    <div class="mb-3 fw-bold" >
                                        <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                        <input type="text" class="form-control" id="nom" name="nom"  style="margin-bottom: 32px;">
                                        <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                                        <span id="nomid" class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Genre</label>
                                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter le Genre">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="genreid" style="color:red; font-weight: bold;"></span>
                                    </div>
                           
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Job</label>
                                        <input type="text" class="form-control" id="Job" name="Job" placeholder="Enter le Job">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="Jobid" style="color:red; font-weight: bold;"></span>
                                    </div>
                                    <div class="mb-3  fw-bold" >
                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                        <span id="addressid"  class ="mt-5 text-danger"style="font-weight: bold;"></span>
                                        <textarea class="form-control" id="adress" name="adres" rows="3"></textarea>
                                        <p id="img4" style="margin-bottom: -1rem;"></p> <span id="addid" style="color:red; font-weight: bold;"></span>
                                    </div>
                                    <div class="mb-3  fw-bold"  >
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="Phone" placeholder="Enter phone">
                                        <p id="img2" style="margin-bottom: -1rem;"></p>
                                        <span id="Phoneid" style="color:red; font-weight: bold;"></span>
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="bntupdate" class="btn btn-primary">update</button>
      </div>
    </div>
  </div>
</div>

<script src="../views/js/model.js"></script>