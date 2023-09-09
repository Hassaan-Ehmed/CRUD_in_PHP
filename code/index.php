<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>

<link rel="stylehseet" href="./style.css">
</head>
<body>
    

<div class="container">

<h1 style="text-align:center">Product Uploading</h1>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="row g-3">
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder=""  name="productname">
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Price</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="productprice">
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Quantity</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="productquantity">
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Description</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="productdescription">
  </div>
  <div class="col-12">
    <button  type="submit" class="btn btn-primary" name="add" >Add Product</button>
  </div>
</form>




</div>



<?php

if(isset($_POST['add'])){

$pname = $_POST['productname'];
$pprice = $_POST['productprice'];
$pquantity = $_POST['productquantity'];
$pdescription = $_POST['productdescription'];

}


$query = "INSERT INTO `product` (`productname`,`productprice`,`productquantity`,`productdescription`) VALUES('$pname','$pprice','$pquantity','$pdescription')";

// header("Location:",$_SERVER['PHP_SELF']);

$res = mysqli_query($conn,$query);

if($res){ 
  echo "<script>
  alert('Data Sended Successfully !');
  window.location.href='data.php';
  </script>";

}

?>



</body>
</html>