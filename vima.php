<?php
include "db.php";

$farmer_name = $_POST['farmer_name'];
$mobile      = $_POST['mobile'];
$village     = $_POST['village'];
$vima_type   = $_POST['vima_type'];
$crop_name   = $_POST['crop_name'];
$area        = $_POST['area'];

$sql = "INSERT INTO vima_apply
(farmer_name, mobile, village, vima_type, crop_name, area)
VALUES
('$farmer_name','$mobile','$village','$vima_type','$crop_name','$area')";

if(mysqli_query($conn,$sql)){
    echo "Vima Applied Successfully";
}else{
    echo "Error in Vima Apply";
}
?>
