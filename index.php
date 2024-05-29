<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width-device-width" , initial-scaler="1" />
    <title> supervisor's lines </title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/lines.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="css/sechead.css" />
    
    <style>
        h1 {
            font-family: 'Amiri', serif;
        }
      </style>
      


    
</head>
<body  >
  
  <sec-head>
    <div class="container">
      <a href="#" class="logo">
        <img src="image/logo.png" height="55px" alt="logo" />
      </a>
      <nav>
        <i class="toggle-menu"><img id="slide" src="image/menu.png" alt="Slide" width=“300” height=“200” ></i>
        <ul>
          <li> <a href="#" class="active">الصفحة الرئيسية</a></li>
          <li> <a href="#members">حول المجلس</a></li>
          <li> <a href="#news">أهم الاخبار</a></li>
          <li> <a href="photoes.html">حول البلدية</a></li>
          <li> <a href="signin.php">تسجيل الدخول</a></li>
          <li> <a href="#contact">تواصل معنا</a></li>
          <li> <a href="review.php"> تقييم الصفحة</a></li>
      </ul>
      <div class="form" >
        <i><a href="search.php"><img src="image/search.png" height="40px"></a> </i>
    </div>
        
      </nav>
    </div>
  </sec-head>
    
    <div class="landing" style="background-color: rgba(219, 216, 213, 0.758);">
      <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel" >
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img src="image/phtoes/ثناء/IMG-20231228-WA0013.jpg" class="d-block w-100" height="900px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/phtoes/ثناء/ship.jpg" class="d-block w-100" height="900px;" alt="...">
          </div>
        </div>
      </div>
        <div class="overlay" style="height: 100%;" >
          <div class="text">
                <div class="contant">
                    <h1 id = "bigger" style="text-align: center;">
                        بلدية زوارة الكبرى 
                        <br>
                        الموقع الرسمي للمجلس البلدي - زوارة
                    </h1>
                
                </div>
            </div>
        </div>
    </div>
    <div class="orlines"></div>
    <div class="space" style="background-color:  rgba(224, 221, 217, 0.666);">

    </div>
    

    <div class="services"  style="background-color:  rgba(224, 221, 217, 0.666);">

    
      <div class="main-heading" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
          <h2>
              اخر الاخبار
          </h2>  
      </div>
    </div>
    <div class="services" id="news"  dir ="rtl" style="background-color: rgba(224, 221, 217, 0.666);">
    <?php

      include "db.php";
      $sql = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT 6;";
      $excecuted = mysqli_query($con,$sql);
      
      $rows = [];
      while ($row = mysqli_fetch_assoc($excecuted)) {
      $rows[] = $row;
      }
    ?>









<div id="carouselExampleIndicators" class="carousel" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"> 
  <div class="carousel-indicators"> <?php foreach ($rows as $index => $row): ?> 
    <button type="button" style="background-color: rgba(228, 172, 16, 0.988);" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>" <?php echo $index === 0 ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?php echo $index +1; ?>">
    </button> <?php endforeach; ?> 
    </div>
    <div class="carousel-inner"> <?php foreach ($rows as $index => $row): ?> 
      <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
       <div class="row"> 
        <div class="col-1">

        </div> 
        <div class="col-10"> 
          <div class="card mb-3">
             <div class="row g-0"> 
              <div class="col-md-6"> 
                <div class="card-body"> 
                  <h5 class="card-title" style="text-align: center;"><?php echo $row["title"] ?></h5>
                   <p class="card-text" style="text-align: right;"><?php echo $row["description"] ?></p> 
                  </div> 
                </div> 
                <div class="col-md-6"> <img src="<?php echo $row["image"] ?>" class="img-fluid rounded-start" style="height: 400px;" alt="...">
               </div> 
              </div> 
            </div>
           </div> <!-- Add the second card here --> 
           
              <div class="col-1">

              </div> 
            </div>
           </div>
            <?php endforeach; ?> 
          </div>
    </div>
  
  
    <div class="space" style="background-color:  rgba(224, 221, 217, 0.666);">

    </div>
    <div class="orlines"></div>
    <div class="space"style="background-color:  rgba(224, 221, 217, 0.666);"></div>
    <div class="services " style="background-color:  rgba(224, 221, 217, 0.666);">
      <div class="main-heading" id="members" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
          <h2 >
              أعضاء المجلس
          </h2>
              <p>
                  " قائمة إيمال : نبني اليوم من أجل الغد"
              </p>
      </div>
      <div class="container " style="text-align: right;" >
          <div class="box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
              <img src="image/ابوعجاجة-removebg-preview.png" >
              <div class="content">
                  <h3>
                   حاجي ابوعجاجة
                  </h3>
                  <p>
                      .رئيس المجلس 
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
              <img src="image/ابوالشواشي-removebg-preview.png"  alt="">
              <div class="content">
                  <h3>
                    سند ابوالشواشي
                  </h3>
                  <p>
                      .عضو أساسي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1500">
              <img src="image/ابوكريعات-removebg-preview.png"  alt="">
              <div class="content">
                  <h3>
                   أسامة ابوكريعات
                  </h3>
                  <p>
                      .عضو احتياطي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
              <img src="image/الحران-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    نجاة الحران
                  </h3>
                  <p>
                    .عضو أساسي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
              <img src="image/الشايب-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    رجاء الشايب
                  </h3>
                  <p>
                     .عضو احتياطي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1500">
              <img src="image/القضاوي-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    إلياس القضاوي
                  </h3>
                  <p>
                      .عضو احتياطي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
              <img src="image/بكة-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    إلياس بكة
                  </h3>
                  <p>
                      .عضو احتياطي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
              <img src="image/رويحة-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    شكري رويحة
                  </h3>
                  <p>
                     .عضو أساسي
                  </p>
              </div>
                 
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1500">
              <img src="image/عطوشي-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    إبراهيم العطوشي
                  </h3>
                  <p>
                      .عضو احتياطي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
              <img src="image/كرشمان-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    زكرياء كرشمان
                  </h3>
                  <p>
                      .عضو أساسي
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
              <img src="image/منصوري-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    عزيز المنصوري
                  </h3>
                  <p>
                      .عضو احتياطي 
                  </p>
              </div>
                  
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1500">
              <img src="image/نانيس-removebg-preview.png" alt="">
              <div class="content">
                  <h3>
                    حكيم نانيس
                  </h3>
                  <p>
                      .عضو أساسي
                  </p>
              </div>
                  
          </div>
      </div>
  
  



  <div class="space" style="padding : 50px ; background-color:  rgba(224, 221, 217, 0.666);"></div>


   <!-- Footer -->
  <footer class="text-center text-lg-start  text-muted" Style="background:rgba(181, 130, 20, 0.755);" id="contact">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" Style="color:rgb(240, 255, 255)">
      <!-- Left -->
      <div>
        <a href="" class="me-4 text-reset">
          <i><button type="button" class="btn  btn-light"><img src="image/footer-icons/discord.png"></button></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i><button type="button" class="btn  btn-light"><img src="image/footer-icons/linkedin.png"></button></i>
        </a>
        <a href="https://twitter.com/Radiozuwara"
        class="me-4 text-reset">
          <i><button type="button" class="btn  btn-light"><img src="image/footer-icons/twitter-alt-square.png"></button></i> 
        </a>
        <i><a href="https://www.bing.com/ck/a?!&&p=b3325bfdba7342f8JmltdHM9MTcwMzgwODAwMCZpZ3VpZD0yMDM1YWJlZC1iM2IwLTZlZDYtMjE4ZS1iODM3YjJjNzZmNjAmaW5zaWQ9NTI2NA&ptn=3&ver=2&hsh=3&fclid=2035abed-b3b0-6ed6-218e-b837b2c76f60&psq=%d9%82%d9%86%d8%a7%d8%a9+%d8%b2%d9%88%d8%a7%d8%b1%d8%a9&u=a1aHR0cHM6Ly93d3cueW91dHViZS5jb20vdXNlci9adXdhcmFNQw&ntb=1"
          class="me-4 text-reset">
          <button type="button" class="btn  btn-light"><img src="image/footer-icons/youtube.png"></button> 
        </a></i>
        <i><a href="info@zuwarah.gov.ly"
          class="me-4 text-reset">
          <button type="button" class="btn  btn-light"><img src="image/footer-icons/google.png"></button> 
        </a></i>
      
        
        <i><a href="https://www.bing.com/ck/a?!&&p=d6ec2fbf4acf2928JmltdHM9MTcwMzgwODAwMCZpZ3VpZD0yMDM1YWJlZC1iM2IwLTZlZDYtMjE4ZS1iODM3YjJjNzZmNjAmaW5zaWQ9NTE5MA&ptn=3&ver=2&hsh=3&fclid=2035abed-b3b0-6ed6-218e-b837b2c76f60&psq=%d8%a7%d9%85%d8%ac%d9%84%d8%b3+%d8%a7%d9%84%d8%a8%d9%84%d8%af%d9%8a+%d8%b2%d9%88%d8%a7%d8%b1%d8%a9&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL1p1d2FyYWguTUMv&ntb=1"
          class="me-4 text-reset">
            <button type="button" class="btn  btn-light"><img src="image/footer-icons/facebook.png"></button> 
        </a></i>
        </a>
      </div>
      <div class="me-5 d-none d-lg-block" style="color: white;">
        <span><h3>   :تابعنا على مواقع التواصل الاجتماعي</h3>
        </span>
      </div>
      <!-- Left -->

      <!-- Right -->
     
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="" Style=" color: rgba(255, 255, 255, 0.861);">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-4">
            <!-- Content -->
            <h4 class="text-uppercase fw-bold mb-4">
              ليبيا - زوارة
            </h4>
            
            <p ><h5>
          تشرفنا بزيارتك, نتمنى منك التواصل معنا ومتابعة أخبار البلدية
            </h5></p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->


          
          

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
            <!-- Links -->
            <h4 class="text-uppercase  fw-bold mb-4">
              :روابط ذات صلة
            </h4>
            <h5>
            <p>
              <a href="https://www.bing.com/ck/a?!&&p=a73417cc66ad07adJmltdHM9MTcwMzgwODAwMCZpZ3VpZD0yMDM1YWJlZC1iM2IwLTZlZDYtMjE4ZS1iODM3YjJjNzZmNjAmaW5zaWQ9NTE5OA&ptn=3&ver=2&hsh=3&fclid=2035abed-b3b0-6ed6-218e-b837b2c76f60&psq=%d9%85%d8%af%d9%8a%d8%b1%d9%8a%d8%a9+%d8%a7%d9%84%d8%a7%d9%85%d9%86+%d8%b2%d9%88%d8%a7%d8%b1%d8%a9&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL211ZGVyaXlldC56dXdhcmEv&ntb=1"
                class="text-reset ">.مديرية الأمن - زوارة</a>
            </p>
            <p>
              <a href="https://www.bing.com/ck/a?!&&p=8331c6ea07230e8dJmltdHM9MTcwMzgwODAwMCZpZ3VpZD0yMDM1YWJlZC1iM2IwLTZlZDYtMjE4ZS1iODM3YjJjNzZmNjAmaW5zaWQ9NTIwNw&ptn=3&ver=2&hsh=3&fclid=2035abed-b3b0-6ed6-218e-b837b2c76f60&psq=%d9%85%d8%b1%d8%a7%d9%82%d8%a8%d8%a9+%d8%a7%d9%84%d8%aa%d8%b9%d9%84%d9%8a%d9%85+%d8%b2%d9%88%d8%a7%d8%b1%d8%a9&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL2VkdXp1d2FyYWgv&ntb=1"
                class="text-reset ">.مراقبة التربية و التعليم - زوارة</a>
            </p>
            <p>
              <a href="https://www.bing.com/ck/a?!&&p=b94aad8844df3903JmltdHM9MTcwMzgwODAwMCZpZ3VpZD0yMDM1YWJlZC1iM2IwLTZlZDYtMjE4ZS1iODM3YjJjNzZmNjAmaW5zaWQ9NTE4Mg&ptn=3&ver=2&hsh=3&fclid=2035abed-b3b0-6ed6-218e-b837b2c76f60&psq=%d8%af%d8%a7%d8%a6%d8%b1%d8%a9+%d8%aa%d9%88%d8%b2%d9%8a%d8%b9+%d8%a7%d9%84%d9%83%d9%87%d8%b1%d8%a8%d8%a7%d8%a1+%d8%b2%d9%88%d8%a7%d8%b1%d8%a9&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL3Blb3BsZS8lRDglQTclRDklODQlRDglQjQlRDglQjElRDklODMlRDglQTktJUQ4JUE3JUQ5JTg0JUQ4JUI5JUQ4JUE3JUQ5JTg1JUQ4JUE5LSVEOSU4NCVEOSU4NCVEOSU4MyVEOSU4NyVEOCVCMSVEOCVBOCVEOCVBNyVEOCVBMS0lRDklODIlRDglQjMlRDklODUtJUQ4JUE3JUQ5JTg0JUQ4JUE3JUQ4JUI5JUQ5JTg0JUQ4JUE3JUQ5JTg1LSVEOCVBOCVEOCVBRiVEOCVBNyVEOCVBNiVEOCVCMSVEOCVBOS0lRDglQUElRDklODglRDglQjIlRDklOEElRDglQjktJUQ4JUIyJUQ5JTg4JUQ4JUE3JUQ4JUIxJUQ4JUE5LzEwMDA5NDgxODUzNTMyNy8_bWliZXh0aWQ9WmJXS3dM&ntb=1" class="text-reset">
                .دائرة توزيع الكهرباء-زوارة</a>
            </p>
            <p>
              <a href="https://www.bing.com/ck/a?!&&p=c2dbee9406866bdcJmltdHM9MTcwMzgwODAwMCZpZ3VpZD0yMDM1YWJlZC1iM2IwLTZlZDYtMjE4ZS1iODM3YjJjNzZmNjAmaW5zaWQ9NTE4Mg&ptn=3&ver=2&hsh=3&fclid=2035abed-b3b0-6ed6-218e-b837b2c76f60&psq=%d9%85%d9%83%d8%aa%d8%a8+%d8%a7%d9%84%d8%b6%d9%85%d8%a7%d9%86+%d8%a7%d9%84%d8%a7%d8%ac%d8%aa%d9%85%d8%a7%d8%b9%d9%8a+%d8%b2%d9%88%d8%a7%d8%b1%d8%a9&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL0JaVy5TU0YuTFkv&ntb=1" class="text-reset">
                .صندوق الضمان الاجتماعي - زوارة</a>
            </p></h5>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="font-size: 36px;
    font-weight: bold;
    background: linear-gradient(to right, rgb(255, 170, 0), rgb(52, 142, 216));
    ">
       Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">retagfathi@gmail.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <span class="up"><img src="image/up-arrow.png"></span>
  <script src="js/style.js"></script>
 


  <script>
    var fontSize = 20;
    var increaseFontSize = function(){
        window.bigger.style.fontSize = fontSize + "px";
        fontSize += 0.5;
        if(fontSize > 70){
            clearInterval(myInterval);
        }
    };
    var myInterval = setInterval(increaseFontSize, 6);
  </script>
    <!--fade-up-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
    <!--menu-->
    <script>
    
        var image1 = new Image();
        image1.src = "image/menu.png";
        var image2 = new Image();
        image2.src = "image/menu (1).png";

       
        var images = [image1, image2];

       
        var currentImage = 0;

      
        function changeImage() {
        
          var img = document.getElementById("slide");
         
          img.src = images[currentImage].src;
          
          currentImage++;
         
          if (currentImage == images.length) {
            currentImage = 0;
          }
        }

        function hoverImage() {
          var img = document.getElementById("slide");
          img.src = images[1 - currentImage].src;
        }

        changeImage();

        document.getElementById("slide").onmouseover = changeImage;
        document.getElementById("slide").onmouseout = changeImage;

    </script>
 </body>
</html>