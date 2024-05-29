<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>تسجيل الدخول</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sechead.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!--  
    <script> 
        function validateForm(event) {
            event.preventDefault(); // يمنع النموذج من إرسال البيانات تلقائيًا
        
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
        
             if (username === "retag" && password === "123"){
            window.location.href = "dashboard.html";
            }
            else
          alert("incorrect info")
          };
    </script>-->
    <!--Stylesheet-->
    <style media="screen">
      *,
      *:before,
      *:after{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
      }
      body{
          background-image:url("image/teboda.jpg");
          background-size:cover;

      }




      form{
          height: 520px;
          width: 400px;
          background-color: rgba(255,255,255,0.13);
          position: absolute;
          transform: translate(-50%,-50%);
          top: 60%;
          left: 50%;
          
          border-radius: 10px;
          backdrop-filter: blur(8px);
          border: 2px solid rgba(255,255,255,0.1);
          box-shadow: 0 0 40px rgba(8,7,16,0.6);
          padding: 50px 35px;
      }
      form *{
          font-family: 'Poppins',sans-serif;
          color: #ffffff;
          letter-spacing: 0.5px;
          outline: none;
          border: none;
      }
      form h3{
          font-size: 32px;
          font-weight: 500;
          line-height: 42px;
          text-align: center;
      }

      label{
          display: block;
          margin-top: 30px;
          font-size: 16px;
          font-weight: 500;
      }
      input{
          display: block;
          height: 50px;
          width: 100%;
          background-color: rgba(255,255,255,0.07);
          border-radius: 3px;
          padding: 0 10px;
          margin-top: 8px;
          font-size: 14px;
          font-weight: 300;
      }
      ::placeholder{
          color: #e5e5e5;
      }
      button{
          margin-top: 50px;
          width: 100%;
          background-color: #ffffff;
          color: #080710;
          padding: 15px 0;
          font-size: 18px;
          font-weight: 600;
          border-radius: 5px;
          cursor: pointer;
      }
      .social{
        margin-top: 30px;
        display: flex;
      }
      .social div{
        background: red;
        width: 150px;
        border-radius: 3px;
        padding: 5px 10px 10px 5px;
        background-color: rgba(255,255,255,0.27);
        color: #eaf0fb;
        text-align: center;
      }
      .social div:hover{
        background-color: rgba(255,255,255,0.47);
      }
      .social .fb{
        margin-left: 25px;
      }
      .social i{
        margin-right: 4px;
      }

    </style>
</head>
<body>
    <sec-head>
        <div class="container">
          
          <nav>
            <i class="toggle-menu"><img id="slide" src="image/menu.png" alt="Slide" width=“300” height=“200” ></i>
    
            <ul>
              <li> <a href="index.html" style="font-size: 25px;" >الصفحة الرئيسية</a></li>
              
          </ul>
          
            
          </nav>
        </div>
      </sec-head>
    <div class="background">
        
    </div>
    
    <form action="login.php" method="POST" >
        <h3>تسجيل الدخول</h3>

        <label for="username" style="text-align: right;" >اسم المستخدم</label>
        <input type="text" style="text-align: right;" placeholder="Email or Phone" id="name" name="names">
        

        <label for="password" style="text-align: right;">كلمة المرور</label>
        <input type="password" style="text-align: right;" placeholder="Password" id="password" name="passwords">

        <button value="Login" id="submit" >Log In</button>  
    </form>
</body>
</html>
