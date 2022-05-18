<?php
include('../models/opération.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="form-container" method="POST" onsubmit="return validation()">
        <div class="mb-3 fw-bold">
            <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name complet" style="margin-bottom: 32px;">
            <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
            <span id="nomid" class="mt-5 text-danger" style="font-weight: bold;"></span>
        </div>

        <div class="mb-3  fw-bold">
            <label for="exampleFormControlInput1" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter le Genre">
            <p id="img2" style="margin-bottom: -1rem;"></p>
            <span id="genreid" style="color:red; font-weight: bold;"></span>
        </div>

        <div class="mb-3  fw-bold">
            <label for="exampleFormControlInput1" class="form-label">class</label>
            <input type="text" class="form-control" id="class" name="class" placeholder="Enter le class">
            <p id="img2" style="margin-bottom: -1rem;"></p>
            <span id="classid" style="color:red; font-weight: bold;"></span>
        </div>
        <div class="mb-3  fw-bold">
            <label for="exampleFormControlInput1" class="form-label">Matière</label>
            <input type="text" class="form-control" id="class" name="matière" placeholder="Enter le Matière">
            <p id="img2" style="margin-bottom: -1rem;"></p>
            <span id="Matièreid" style="color:red; font-weight: bold;"></span>
        </div>

        <div class="mb-3  fw-bold">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
            <p id="img2" style="margin-bottom: -1rem;"></p>
            <span id="phoneid" style="color:red; font-weight: bold;"></span>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-info mT-3">Save</button>
        </div>
    </form>
</body>

</html>