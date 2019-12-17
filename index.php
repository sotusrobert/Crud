<?php
require_once("operation.php");
?>


<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style1.css">

<title>Title</title>
</head>
<body>


<!-- Navigáció kezdete -->
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top  menu">
  <a class="navbar-brand" href="#"><i class="fas fa-couch"></i> SR Furniture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Főoldal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Rólunk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Termékek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="maintain.php">Karbantartás</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<!-- Navigáció vége -->


<!-- Üdvözlő kezdete -->

<div class="container-fluid text-center furniture">
    <h3 class="p-5 furniture-h">Üdvözli Önt a SR Furniture Termékkatalógusa</h3>
    <p class="furniture-p">Tekintse meg kínálatunkat! Nálunk megtalálja, ami otthona berendezéséhez szükséges.
        Szabvány méretű bútorok mellett lehetőség van egyedi igény szerint megtervezett bútorok elkészítésére.
        Érdemes felkeresni üzletünket, ahol állandó akciókkal várjuk visszatérő és új vásárlóinkat.
    </p>
    <button class="btn btn-dark">Rólunk</button>
    <button class="btn btn-success button-details">Bútorok</button>
</div>

<!-- Üdvözlő vége -->


<!-- Termék kártyák kezdete -->

<div class="container">
    <div class="row">
        <div class="col-3 my-5">
            <div class="card text-center">
                <div class="card-header">
                    <h5>U. alakú ülőgarnitúra</h5>
                </div>
                <hr>
                <div class="card-body">
                    <p>A modern U alakú ülőgarnitúrák a letisztult, fiatalos, minimál design jegyében készültek. Méreteiből adódóan több embernek is helyt ad, egyes ülőgarnitúrákhoz pedig külön puff is jár.</p>
                    
                </div>
                <div class="card-footer">
                    <button class="btn-success button-details" data-toggle="modal" data-target="#UfurnitureModal">Részletek</button>
                </div>
            </div>
        </div>
        <div class="col-3 my-5">            
            <div class="card text-center">
                <div class="card-header">
                    <h5>Étkezőgarnitúra</h5>
                </div>
                <hr>
                <div class="card-body">
                    <p>Étkezőgarnitúra, ahol a család találkozik.Ezért áruházunk próbálja a legszélesebb kínálatot nyújtani étkezőgarnitúrából. Az étkezőgarnitúra bármilyen szék és asztal kombinációval kérhetőek.</p>
                </div>
                <div class="card-footer">
                    <button class="btn-success button-details" data-toggle="modal" data-target="#EfurnitureModal">Részletek</button>
                </div>
            </div>
        </div>
        <div class="col-3 my-5">
            <div class="card text-center">
                <div class="card-header">
                     <h5>Gardróbszekrény</h5>
                  
                </div>
                <hr>
                <div class="card-body">
                    <p>A gardróbszekrény a legmegfelelőbb bútordarab a tárolásra.  A mai bútortrendnek köszönhetően már nem csak tárolási funkciója van, hanem kivitelezésük miatt szép dísze is lehet a szobánknak. </p>
                </div>
                <div class="card-footer">
                    <button class="btn-success button-details" data-toggle="modal" data-target="#GfurnitureModal">Részletek</button>
                </div>
            </div>
        </div>
        <div class="col-3 my-5">
            <div class="card text-center">
                <div class="card-header">
                    <h5>3-2-1 Ülőgarnitúra</h5>
                    
                </div>
                <hr>
                <div class="card-body">
                    <p>Az ülőgarnitúra kiválasztásánál első szempontként figyelembe kell vennünk, hogy több évig használatban lesz, ezért olyan színt és kialakítást kell választanunk, ami hosszú távon megfelel ízlésünknek.</p>
                </div>
                <div class="card-footer">
                    <button class="btn-success button-details" data-toggle="modal" data-target="#U3furnitureModal">Részletek</button>
                </div>
            </div>
        </div>

    </div>
</div>
 <!-- Termék kártyák vége -->

<!-- modal U. alakú ülőgarnitúra kezdete -->
<div class="modal fade furniture_modal" id="UfurnitureModal" tabindex="-1" role="dialog" aria-labelledby="UfurnitureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UfurnitureModalLabel">U. alakú ülőgarnitúra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class='row justify-content-center'> 
            <?php
                $sql="SELECT * FROM furniture WHERE furniture_type_id=1;";
                $result=mysqli_query($conn, $sql);
                $resultCheck=mysqli_num_rows($result);
                if ($resultCheck>0) {
                    while($row=mysqli_fetch_assoc($result)){

                echo " 
                      
                    <div class='col-6 mb-5 justify-content-center'>
                        <div class='card h-100  text-center' style='width: 30rem;'>
                                <img src='".$row['prod_image']."' class='card-img-top' alt='".$row['prod_name']."' style='height: 15rem;'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$row['prod_name']."</h5>
                                <p class='card-text'>".$row['prod_description']."</p>
                            </div>
                            <div class='card-footer'>
                                <span class='btn btn-secondary'>".$row['prod_price']." Ft</span>
                             </div>
                        </div>
                    </div>
                
                ";
                 }
                }
            ?>

        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal U. alakú ülőgarnitúra vége -->
<!-- modal Étkezőgarnitúra kezdete -->
<div class="modal fade" id="EfurnitureModal" tabindex="-1" role="dialog" aria-labelledby="EfurnitureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Étkezőgarnitúra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class='row justify-content-center'> 
            <?php
                $sql="SELECT * FROM furniture WHERE furniture_type_id=3;";
                $result=mysqli_query($conn, $sql);
                $resultCheck=mysqli_num_rows($result);
                if ($resultCheck>0) {
                    while($row=mysqli_fetch_assoc($result)){

                echo " 
                      
                    <div class='col-6 mb-5 justify-content-center'>
                        <div class='card h-100  text-center' style='width: 30rem;'>
                                <img src='".$row['prod_image']."' class='card-img-top' alt='".$row['prod_name']."' style='height: 15rem;'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$row['prod_name']."</h5>
                                <p class='card-text'>".$row['prod_description']."</p>
                            </div>
                            <div class='card-footer'>
                                <span class='btn btn-secondary'>".$row['prod_price']." Ft</span>
                            </div>
                        </div>
                    </div>
                
                ";
                 }
                }
            ?>

        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal Étkezőgarnitúra vége -->
<!-- modal Gardróbszekrény kezdete -->
<div class="modal fade" id="GfurnitureModal" tabindex="-1" role="dialog" aria-labelledby="GfurnitureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gardróbszekrény</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class='row justify-content-center'> 
            <?php
                $sql="SELECT * FROM furniture WHERE furniture_type_id=5;";
                $result=mysqli_query($conn, $sql);
                $resultCheck=mysqli_num_rows($result);
                if ($resultCheck>0) {
                    while($row=mysqli_fetch_assoc($result)){

                echo " 
                      
                    <div class='col-6 mb-5 justify-content-center'>
                        <div class='card h-100  text-center' style='width: 30rem;'>
                                <img src='".$row['prod_image']."' class='card-img-top' alt='".$row['prod_name']."' style='height: 15rem;'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$row['prod_name']."</h5>
                                <p class='card-text'>".$row['prod_description']."</p>
                            </div>
                            <div class='card-footer'>
                                <span class='btn btn-secondary'>".$row['prod_price']." Ft</span>
                            </div>
                        </div>
                    </div>
                
                ";
                 }
                }
            ?>

        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal Gardróbszekrény vége -->
<!-- modal 3-2-1 Ülőgarnitúra kezdete -->
<div class="modal fade" id="U3furnitureModal" tabindex="-1" role="dialog" aria-labelledby="U3furnitureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">3-2-1 Ülőgarnitúra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class='row justify-content-center'> 
            <?php
                $sql="SELECT * FROM furniture WHERE furniture_type_id=7;";
                $result=mysqli_query($conn, $sql);
                $resultCheck=mysqli_num_rows($result);
                if ($resultCheck>0) {
                    while($row=mysqli_fetch_assoc($result)){

                echo " 
                      
                    <div class='col-6 mb-5 justify-content-center'>
                        <div class='card h-100  text-center' style='width: 30rem;'>
                                <img src='".$row['prod_image']."' class='card-img-top' alt='".$row['prod_name']."' style='height: 15rem;'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$row['prod_name']."</h5>
                                <p class='card-text'>".$row['prod_description']."</p>
                            </div>
                            <div class='card-footer'>
                                <span class='btn btn-secondary'>".$row['prod_price']." Ft</span>
                            </div>
                        </div>
                    </div>
                
                ";
                 }
                }
            ?>

        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal 3-2-1 Ülőgarnitúra vége -->





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>