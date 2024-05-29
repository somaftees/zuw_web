<?php

include "db.php";
$name = $_POST["names"];
$pass = $_POST["passwords"];

$sql = "SELECT * FROM users WHERE username='$name' AND password='$pass'";
$result = mysqli_query($con,$sql);
$number = mysqli_num_rows($result);

if($number==1){
    header("Location: dashboard.php");
}
else{
    echo "BLOCK";
}

?>