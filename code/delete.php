<?php

include("connection.php");


$id = $_GET['id'];

$query = "DELETE from product where productid = $id ";



if(mysqli_query($conn,$query)){

    echo "Data Deleted Successfuly !";
    echo"<script>window.location.href='data.php';</script>";

}
else{
    echo mysqli_error();
}


?>