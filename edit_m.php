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



<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="css/sechead.css" />
    <link rel="stylesheet" href="card_style.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        
        .sidebar {
            width: 300px;
            height: 100%;
            position: fixed;
            right: 0;
            top: 0;
            background-image: url("image/teboda.jpg");
           
        }

        .sidebar ul {
            list-style: none;
            padding: 20px;
            
        }

        .sidebar ul li {
            margin: 10px 10px;
            margin-top: 10px;
            padding-top: 15px;
        }

        .sidebar ul li a {
            color: black;
            text-decoration: none;
            background-color: #e0e0e0d7;
            font-size: 30px;
            border: 3px solid rgba(203, 165, 10, 0.762);
            padding: 5px 5px;
            
        }

        .sidebar ul li a:hover {
            background-color: #c47207d7;
            color: azure;
        }

        .main {
            margin-left: 200px;
            padding: 20px;
        }

        .main h1 {
            color: #100303;
        }

        .main p {
            color: #555;
        }
    </style>
</head>
<body >
    
    
    <div class="main">
        
    <h1>
        تعديل المحتويات 
        
        
    </h1>
        <div class="new-cards" >
  
                          
                    <form class="form" method="POST" action="update_cmd.php" enctype="multipart/form-data">
                    <label for="name">title:</label>
                    <input type="text" id="title" name="title" required>
                    <label for="email">description:</label>
                    <input type="text" id="desc" name="desc" required>
                    <input type="file" name="image" required>
                    <button  type="submit" name="id" value="<?php echo $row['id'] ?>" > update </button>

        
                    </form>
                            
                    

    </div>
    <div class="sidebar" style="text-align: right; ">
        <ul>
            <li><a href="dashboard.php">الرئيسية</a></li>
            <li><a href="#">المستخدمين</a></li>
            <li><a href="add_news.php">إضافة  </a></li>
            <li><a href="edit_news.php">تعديل و حذف</a></li>
            <li><a href="index.php">
                    العودة إلى الصفحة
                </a></li>
        </ul>
    </div>
</body>
</html>
