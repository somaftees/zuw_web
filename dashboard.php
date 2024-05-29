<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="css/sechead.css" />
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
        <h1>مرحبا بك في لوحة التحكم</h1>
    </div>
    <div class="sidebar" style="text-align: right; ">
        <ul>
            <li><a href="#">الرئيسية</a></li>
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
