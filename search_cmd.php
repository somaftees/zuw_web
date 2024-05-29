<?php

include "db.php";

$title= $_POST["title"];

$sql = "SELECT `link` FROM `items` WHERE `title` = ?";

$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "s", $title);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$number = mysqli_num_rows($result);

if($number==1){
    $row = mysqli_fetch_assoc($result);
    $link = $row['link'];
    header("Location: $link");
}
else{
    echo "This item does not exist.";
}

?>