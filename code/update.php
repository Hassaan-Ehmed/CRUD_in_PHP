<?php include("connection.php");  $current_product_id = $_GET['id']?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>

<link rel="stylehseet" href="./style.css">
</head>
<body>
    
    <?php
//Fetch Current Product Data from Database
$query_GET = "SELECT * FROM  `product` where `productid` = $current_product_id";


$res_GET = mysqli_query($conn,$query_GET);



while($currentRow = mysqli_fetch_assoc($res_GET)){
    

    ?>

<div class="container">

<h1 style="text-align:center">Edit your Product <?php echo $current_product_id." "."(".$currentRow['productname'].")" ?></h1>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="row g-3">
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Name</label>
    <input type="text" value="<?php echo $currentRow['productname']?>" class="form-control" id="inputAddress2" placeholder=""  name="productname">
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Price</label>
    <input type="text" value="<?php echo $currentRow['productprice']?>" class="form-control" id="inputAddress2" placeholder="" name="productprice">
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Quantity</label>
    <input type="text" value="<?php echo $currentRow['productquantity']?>" class="form-control" id="inputAddress2" placeholder="" name="productquantity">
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Description</label>
    <input type="text" value="<?php echo$currentRow['productdescription']?>" class="form-control" id="inputAddress2" placeholder="" name="productdescription">
  </div>
  <div class="col-12">
    <button  type="submit" class="btn btn-success" name="save" >Save</button>
  </div>
</form>


<?php 

}

?>

</div>



<?php


$current_product_id = $_GET['id'];


if(isset($_POST['save'])){

$pnameU = $_POST['productname'];
$ppriceU = $_POST['productprice'];
$pquantityU = $_POST['productquantity'];
$pdescriptionU = $_POST['productdescription'];

}


$query = "UPDATE `product` SET `productname`='$pnameU' , `productprice` ='$ppriceU' , `productquantity`='$pquantityU' ,  `productdescription`='$pdescriptionU' where `productid` = $current_product_id";


$res = mysqli_query($conn,$query);

if($res){ 
  echo "<script>
  alert('Data Update Successfully !');
    window.location.href = 'data.php';
  </script>";

}

?>



</body>
</html>