<?php

$prod_name="";
$prod_price="";
$prod_image="";
$prod_description="";
$furniture_type_id="";
$id=0;

$dbServer ="Localhost";
$userName="root";
$password="";
$dbName="crud";

$conn=mysqli_connect($dbServer,$userName,$password, $dbName);


if (isset($_POST['create'])){

    $prod_name=mysqli_real_escape_string($conn,$_POST['prod_name']);
    $prod_price=mysqli_real_escape_string($conn,$_POST['prod_price']);
    $prod_image=mysqli_real_escape_string($conn,$_POST['prod_image']);
    $prod_description=mysqli_real_escape_string($conn,$_POST['prod_description']);
    $furniture_type_id=mysqli_real_escape_string($conn,$_POST['furniture_type_id']);

    if (empty($prod_name && $prod_price && $prod_image && $prod_description && $furniture_type_id )){
    echo "<div class='alert alert-success' role='alert'>
        A rekord sikeresen rögzítésre került!
      </div>";
    }
    else {
        $sql= "INSERT INTO furniture VALUES ('', '$prod_name','$furniture_type_id','$prod_price','$prod_image','$prod_description');";
        mysqli_query($conn, $sql);

        
        Echo "Sikeresen rögzítésre került a rekord!";
    

    }


}



if (isset($_POST['update'])) {

$prod_name=mysqli_real_escape_string($conn,$_POST['prod_name']);
$prod_price=mysqli_real_escape_string($conn,$_POST['prod_price']);
$prod_image=mysqli_real_escape_string($conn,$_POST['prod_image']);
$prod_description=mysqli_real_escape_string($conn,$_POST['prod_description']);
$furniture_type_id=mysqli_real_escape_string($conn,$_POST['furniture_type_id']);
$id=mysqli_real_escape_string($conn,$_POST['id']);


    if (empty($prod_name && $prod_price && $prod_image && $prod_description && $furniture_type_id )) {
        echo "<div class='alert alert-warning' role='alert'>
        A rekord frissítéséhez minden mezőt ki kell tölteni!
      </div>";
               
    }
    else {
        $sql="UPDATE furniture SET prod_name='$prod_name', furniture_type_id='$furniture_type_id', prod_price='$prod_price', prod_image='$prod_image', prod_description='$prod_description'  WHERE id=$id";
        
        mysqli_query($conn, $sql);
        echo "<div class='alert alert-success' role='alert'>
        A rekord felülírása sikeresen megtörtént!
        </div>";

    
    } 
}
    
  



if (isset($_POST['delete'])) {
    $id=$_POST['id'];
    if (empty($id)) {
       echo "Nincs kijelölve elem törlésre!";
    }
    else {
      
    
    $sql= "DELETE FROM furniture WHERE id=$id";
    mysqli_query($conn,$sql);
    echo "<div class='alert alert-danger' role='alert'>
    Sikeresen törlésre került a rekord!
    </div>";
    }
}