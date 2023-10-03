

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Hospital</title>
</head>
<body>
    <?php
        include("include/header.php");
    ?>


    <div class="container-fluid">
        <div class="row">
                <div class="col-sm-8 ">
                    <img class="hero-image" src="hero.jpg" alt="Opis slike">
                </div>
                
                <div class="col-sm-4 ">
                    <h1 class="hero-heading">Welcome to the hospital management system</h1> 
                 </div>
    </div> 

    <div  class="button-section container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div  class="col-md-3 mx-2 shadow d-flex justify-content-center align-items-center flex-column">
                    <img class="button-image" src="info.png">

                    <h5 class="text-center">For more information</h5>

                    <a href="#">
                        <button class="btn btn-primary my-3">
                            More</button>
                    </a>
                </div>
                
                <div  class="col-md-3 mx-2 shadow d-flex justify-content-center align-items-center flex-column">
                    <img class="button-image" src="patients.jpg">

                    <h5 class="text-center">Create account for patients</h5>

                    <a href="#">
                        <button class="btn btn-primary my-3 ">
                            Create</button>
                    </a>
                 
 
                </div>

                 
                <div class="col-md-3 mx-2 shadow d-flex justify-content-center align-items-center flex-column">
                    <img class="button-image" src="doctor.png">

                    <h5 class="text-center">We are emloying doctors</h5>

                    <a href="#">
                        <button class="btn btn-primary my-3">
                            Apply now</button>
                    </a>
 
                </div>
        </div>
    </div>
</div>


<?php
  include("include/footer.php");
?>

       

                
</body>
</html>