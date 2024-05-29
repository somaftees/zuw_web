<?php
include "db.php";
$id = $_POST['id'];

$sql = "DELETE FROM `news` WHERE id='$id'";

mysqli_query($con,$sql);

header("Location: edit_news.php");




?>