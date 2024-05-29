<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width-device-width", initial-scaler="1" />
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
        
        <link rel="stylesheet" type="text/css" href="https://ssl.gstatic.com/docs/script/css/add-ons.css" />
        <link rel="stylesheet" href="css/sechead.css" />
        <link rel="stylesheet" href="css/photoland.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    
    
    
    

        <style>

          body {margin:0;padding:14px 6px 0 6px;background-color:transparent;font-family: 'Roboto', sans-serif;overflow:hidden;}
    
          #search-icon,#clear-icon {padding:12px;height:24px;vertical-align:middle;cursor:pointer;}
    
          #clear-icon {visibility:hidden;}
    
          #search-query {
    
            width:50vw;min-width:480px;max-width:720px;
    
            margin:0 auto;overflow:hidden;border:0;border-radius:4px;color: #212121;background-color:#FFF;
    
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);font-size:16px;line-height:24px;}
    
          #search-query-input {
    
            min-width:104px;width:66%;height:24px;font-size:16px;font-stretch: normal;letter-spacing: normal;line-height:24px;border:0;color:#000;background-color:transparent;cursor:text;
    
            text-align:start;vertical-align:middle;}
    
          @media all and (max-width: 480px) {  
    
              #search-query {min-width:200px;width:100%;}
    
           }
    
        </style>
    </head>
<body>
  <sec-head>
    <div class="container">
      <a href="#" class="logo">
        <img src="image/logo.png" height="55px" alt="logo" />
      </a>
      <nav>
        <i class="toggle-menu"><img id="slide" src="image/menu.png" alt="Slide" width=“300” height=“200” ></i>

        <ul>
          <li> <a href="index.php" style="font-size: 25px;" >الصفحة الرئيسية</a></li>
          
          <li> <a href="signin.php" style="font-size: 25px;">تسجيل الدخول</a></li>
      </ul>
      
        
      </nav>
    </div>
  </sec-head>
  <div class="phlanding" >
      
    <div class="overlay">
      <div class="text">
            <div class="contant" >
              <div >

                  <img id="search-icon" alt="Search"  onclick="submitSearch();" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAQAAABIkb+zAAADAklEQVR4AezZA6xcQRSA4b92g9q2/VRuw9puVLcxake13Zh1G9W2bds2T42ZzNPeO7Pb5H5/zD17PUMgEAgEAoFAIGxFGMRMlrGTi7zjFZfZwTJmMohCRLkajOMYkkRHGUdNolI8B5EUdpB4okpJViOpbDXFiArpGMcHJIzeMY50RFgB9iIe2ksBIiiGR4jHHhFDhHTlI+JDH+lKBMQmceY/YhZNqExBMn+rAJUIMZMnCOY+EItjxRP9OetoTQZMMtCadYixJ5TAoQyYH1cbiCE5CWxADB0jA85MNp7JHUipnsbTbwqO1OWL4RSIIzUSDKfgF+riQBrOIFrPKENqleEZonWGNFjX0vDPNSUcTQ1HsiXWbUO0hhOu4YjWViwri2gdwYvDiFZ5rJqIaMXgRRyiNRGr7iBKa/BqDaJ0G4vKIVqN8Kqxy5OoL6L0mDR4lUZ/o2UA1sxHlBbhh8WI0jys2Y4odcUPXRCl7VhzDVFqgB8aIErXsUZ/fylr5dnyGGv0R38O/JADUfqMNfpLcHb8kF1/Mf/fT6HnWHMdUWqIHxoiSjexZiui1A0/dEWUtmHNPERpsZUH2WJ3rxKPSIdX6XiMKPXGmvKIVgivQohWJSx6YP11+g5WTUK04vAiBtGaBeDyJDqMF0cQrVpYthnRGkq4hiJau7GuhW/LKiHDskpzrEvDKV8WtkobFrZ24UQ9H5YW44xLi7VwZIpxcbcbKdXNuDUyG2cychQxtJ4YkhPPOsTQJXLiUMmwNjhasQUx9obyOBafzBZTiMoUIguZKUhlQszSRtYHaI5z+pnsT6NxKI5HiMee8xlRGoJDhdiNeOg6ZWmNRHKEdIzlXZj7w/PIDYBEdgQoxmokla2nNL9J5EeAeI4iKWwPXfiXRMcIUJPxHEOS6CTDKYVuTGRH0BViEDNZyk4u8gpBeMMuJtKegujcj2DN1/bnmAgAEIBhIJIZGZHOWAEslPsoyCMgIHxPmAgICAjXIQRQSsh+JSH7vYQ1StvZryW8vy9JkiQdHsFQT60Y7OcAAAAASUVORK5CYII=">
                <form action ="search_cmd.php" method="POST" >
                    <input name = "title" type="text"  placeholder="Search my Site "  style="box-shadow:none";>
                  <button  type="submit">بحث </button>
                </form>

              </div>
            </div>
        </div>
    </div>
</div>
        <!-- <input type="text" id="query" />

        <button id="search" onclick="submitSearch()">Search</button> -->



        

</body>
</html>
