<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Record in DB</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>

<link rel="stylehseet" href="style.css">
</head>
<body>
    

<div >

<h1 style="text-align:center">Your Data is Here</h1>




<?php
$query = "SELECT * FROM `product`";


$res = mysqli_query($conn,$query);


    while($row = mysqli_fetch_assoc($res)){
?>

<ul>


<li style="list-style-type:none; margin-top:30px;">
<?php echo "<strong>Product ID </strong>".$row['productid']."<strong> Product Name </strong>".$row['productname']."<strong> Product Price </strong>".$row['productprice']."<strong> Product Quantity </strong>".$row['productquantity']."<strong> Product Description </strong>".$row['productdescription'] ?><span style="float:right"><button class="btn bg-danger" style="margin-right:3px; color:white"
><a style="text-decoration:none; color:white" href="delete.php?id=<?php echo $row['productid']?>">Delete</a></button><button class="btn bg-primary" style="margin-right:3px; color:white">

<a style="text-decoration:none; color:white" href="update.php?id=<?php echo $row['productid'] ?>">
Update
</a>


</button></span></li>

</ul>


<?php 
}
?>





</div>



</body>
</html>