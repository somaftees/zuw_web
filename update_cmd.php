<?php
include "db.php";

// Fetch the data from the database using the ID of the record you want to edit
if (isset($_GET["id"]))
{
    $id = $_GET["id"];
    $sql = "SELECT * FROM `news` WHERE `id` = '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
}

// Update the data in the database
if (isset($_POST["title"]) && isset($_POST["desc"]))
{
    $id = $_POST["id"];
    $t = $_POST["title"];
    $d = $_POST["desc"];
    
    // If the image file is uploaded
    if(isset($_FILES["image"]["name"]))
    {
        $i = basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$i);
        $image = "img/".$i;

        $sql = "UPDATE `news` SET `title` = '$t', `description` = '$d', `image` = '$image' WHERE `id` = '$id'";
    }
    else
    {
        $sql = "UPDATE `news` SET `title` = '$t', `description` = '$d' WHERE `id` = '$id'";
    }

    mysqli_query($con,$sql);
    header("Location: edit_news.php");
}
?>