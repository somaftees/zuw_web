<?php
include "db.php";



if (isset($_POST["title"]) && isset($_POST["desc"]) )
{
    $t = $_POST["title"];
    $d = $_POST["desc"];
    

    $i = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$i);
    $image = "img/".$i;

    $sql = "INSERT INTO `news` ( `title`, `description`, `image`) VALUES ('$t', '$d', '$image');";

    mysqli_query($con,$sql);
    header("Location: add_news.php");
}


?>