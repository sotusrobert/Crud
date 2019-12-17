<?php
require_once("operation.php");

if (isset($_GET['edit'])) {
  
  $id=$_GET['edit'];
  $lekerdez= mysqli_query($conn, "SELECT * FROM furniture INNER JOIN furniture_type ON furniture.furniture_type_id= furniture_type.id WHERE furniture.id=$id;");
  $rekord= mysqli_fetch_array($lekerdez);
  $prod_name=$rekord['prod_name'];
  $prod_price=$rekord['prod_price'];
  $prod_image=$rekord['prod_image'];
  $prod_description=$rekord['prod_description'];
  $furniture_type_id=$rekord['type'];
  $id=$rekord[0];  
  $ftpi=$rekord['id'];
 
}


?>

<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
<title>Title</title>
</head>
<body>
<?php
$fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "error=hiany")==true) {
  echo "<div class='bg-warning p-2'>Minden mezőt ki kell tölteni az adatok felülírásához! </div> ";

}

?>


<!-- Navigáció kezdete -->

<nav class="navbar navbar-expand-lg navbar-light bg-secondary mb-5 ">
  <a class="navbar-brand" href="#"><i class="fas fa-couch"></i> SR Furniture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Főoldal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Rólunk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Termékek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Karbantartás</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Navigáció vége -->

<!--Termékfelvételi űrlap kezdete -->

<div class="container">
    <form action="" method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-heading"></i></span>
            </div>
            <input type="hidden" name="id"class="form-control"  aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $id; ?>">
            <input value="<?php echo $prod_name; ?>" type="text" name="prod_name"class="form-control" placeholder="Termék név" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
        <div class="row">       
             <div class="col">       
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">HUF</span>
                    </div>
                    <input value="<?php echo $prod_price; ?>"  type="text" name="prod_price"class="form-control" placeholder="Termék ár" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>  
            <div class="col">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Típus</span>
                            
                        </div>
                        <select name="furniture_type_id" class="form-control">
                        <option value="<?php echo $ftpi; ?>"><?php echo $furniture_type_id; ?></option>
                            <?php
                               $sql="SELECT * FROM furniture_type;";
                               $result=mysqli_query($conn, $sql);

                               if ($result>0) {
                                  while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['id']."'>".$row['type']."</option>";

                                  }
                               }
                            ?>

                        </select>       

                 </div>
            </div>
        </div> 
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input value="<?php echo $prod_image; ?>" type="text" name="prod_image"class="form-control" placeholder="Termék kép" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Termék leírás</span>
            </div>
                <textarea name="prod_description" value="<?php echo $prod_description; ?>" class="form-control" aria-label="With textarea"><?php echo $prod_description; ?></textarea>
        </div>

        <button type="submit" name="create" title="Mentés" class="btn btn-success m-5 p-3"><i class="fas fa-save"></i></button>
        <button type="submit" name="read" title="Termék lista lekérés" class="btn btn-info m-5 p-3"><i class="fas fa-search-plus"></i></button>
        <button type="submit" name="update" title="Termék felülírás" class="btn btn-warning m-5 p-3"><i class="fas fa-pencil-alt"></i></button>
        <button type="submit" name="delete" title="Törlés" class="btn btn-danger m-5 p-3"><i class="fas fa-trash"></i></button>

    </form>
</div>


<!--Termékfelvételi űrlap vége -->

<!--Termék lista táblázat kezdete -->

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Típus</th>
      <th scope="col">Termék név</th>
      <th scope="col">Termék ár</th>
      <th scope="col">Termék kép</th>
      <th scope="col">Termék leírás</th>
      <th scope="col">Szerkesztés</th>
    </tr>
  </thead>
  <tbody>
      <?php
      
      $sql= "SELECT * FROM furniture;";
      $result= mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      
      if (isset($_POST['read'])) {
        
        if ($resultCheck>0) {
          
          while($row=mysqli_fetch_assoc($result)){
            echo "
            <tr>
                <td  id='".$row['id']."'>".$row['furniture_type_id']."</td>
                <td  id='".$row['id']."'>".$row['prod_name']."</td>
                <td  id='".$row['id']."'>".$row['prod_price']."</td>
                <td  id='".$row['id']."'>".$row['prod_image']."</td>
                <td  id='".$row['id']."'>".$row['prod_description']."</td>
                <td><a href='maintain.php?edit=".$row['id']."' ><i class='fas fa-edit' ></i></a></td>
            </tr>
            
            ";
            


          }
        }
       
      }
      



      ?>
  </tbody>
</table>

<!--Termék lista táblázat vége -->






















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="main.js"></script>
</body>
</html>