<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    input[type=text] {
      width: 70%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
    }

    input[type=text]:focus {
      border: 3px solid #555;
    }
  </style>


  <style>
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>


  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>IASF</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
  <!-- header section start -->
  <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="logo"><a href="index.php"><img src="images/logo2.png"></a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
          </li>

          
        
          <li class="nav-item">
            <a class="nav-link" href="sta.php">Statistics</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="more.php">Learn More </a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
        </form>
      </div>
    </nav>
  </div>
  <!-- header section end -->
  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container-fluid">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="banner_taital">
                  <h3 class="dance_text">What is digital pollution?</h3><br>
                  <div class="about_bt"><a href="sta.php">Read More</a></div>

                </div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/1.jpeg"></div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-left"><img src="images/left-icon.png"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-right"><img src="images/right-icon.png"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="ram">
    <div class="border_bg"></div>
  </div>
  <!-- banner section end -->
  <!-- shortcode section start -->
  <div class="shortcode_section layout_padding">
    <div class="container">
      <h1 class="ballet_text">SHORTCUT FOR WEBSITES</h1>
      <p class="amet_text">You can Access any website with less efforts and Creating less Pollution </p>


      <div class="shortcode_section_2">
        <div class="shortcode_left">
          <h1 class="heading_text">YouTube</h1>
          <form name="form" action="welcome.php" method="post">
            <input type="text" id="fname" name="youtube" placeholder="Enter What Do you wan to Search On YouTube">

            <input class="button" type="submit" value="Search">
          </form>

        </div>
        <div class="shortcode_right"><img src="images/mg.png"></div>
      </div>

      <div class="shortcode_section_2">
        <div class="shortcode_right"><img src="images/inst.png"></div>
        <div class="shortcode_left border_left_0">
          <h1 class="heading_text">Instagram</h1>
          <form name="form" action="welcome.php" method="post">
            <input type="text" id="fname" name="insta" placeholder="Search Username">

            <input class="button" type="submit" value="Search">
          </form>
        </div>
      </div>


      <div class="shortcode_section_2">
        <div class="shortcode_left">
          <h1 class="heading_text">Wikipedia</h1>
          <form name="form" action="welcome.php" method="post">
            <input type="text" id="fname" name="wiki" placeholder="Search On Wikipedia">

            <input class="button" type="submit" value="Search">
          </form>

        </div>
        <div class="shortcode_right"><img src="images/wiki.png"></div>
      </div>


      <div class="shortcode_section_2">
        <div class="shortcode_right"><img src="images/zoom.png"></div>
        <div class="shortcode_left border_left_0">
          <h1 class="heading_text">Zoom</h1>
          
          <a href="https://pwa.zoom.us/wc/" class="button" target="_blank" rel="noopener noreferrer">Join Meeting</a>
         
        </div>
      </div>


      <div class="shortcode_section_2">
        <div class="shortcode_left">
          <h1 class="heading_text">Netflix</h1>
          <a href="https://www.netflix.com/in/" class="button" target="_blank" rel="noopener noreferrer">Watch Netflix</a>

        </div>
        <div class="shortcode_right"><img src="images/netflix.png"></div>
      </div>

      <div class="shortcode_section_2">
        <div class="shortcode_right"><img src="images/ap.png"></div>
        <div class="shortcode_left border_left_0">
          <h1 class="heading_text">Amazon Prime Video</h1>
          
          <a href="https://www.primevideo.com/" class="button" target="_blank" rel="noopener noreferrer">Watch Amazon Prime Video</a>
         
        </div>
      </div>


      <div class="shortcode_section_2">
        <div class="shortcode_left">
          <h1 class="heading_text">Uber</h1>
          <a href="https://www.uber.com/in/en/" class="button" target="_blank" rel="noopener noreferrer">Book a Cab</a>

        </div>
        <div class="shortcode_right"><img src="images/uber.png"></div>
      </div>



      <div class="shortcode_section_2">
        <div class="shortcode_right"><img src="images/ola.png"></div>
        <div class="shortcode_left border_left_0">
          <h1 class="heading_text">Ola</h1>
          
          <a href="https://www.olacabs.com/" class="button" target="_blank" rel="noopener noreferrer">Book a Cab</a>
         
        </div>
      </div>


      <div class="shortcode_section_2">
        <div class="shortcode_left">
          <h1 class="heading_text">Rapido Bike</h1>
          <a href="https://www.rapido.bike/" class="button" target="_blank" rel="noopener noreferrer">Book a Bike</a>

        </div>
        <div class="shortcode_right"><img src="images/rapido.png"></div>
      </div>



      <div class="shortcode_section_2">
        <div class="shortcode_right"><img src="images/ir.png"></div>
        <div class="shortcode_left border_left_0">
          <h1 class="heading_text">IRCTC</h1>
          
          <a href="https://www.irctc.co.in/nget/train-search" class="button" target="_blank" rel="noopener noreferrer">Book a Train Ticket</a>
         
        </div>
      </div>


      <div class="shortcode_section_2">
        <div class="shortcode_left">
          <h1 class="heading_text">Make My Trip</h1>
          <a href="https://www.makemytrip.com/flights/" class="button" target="_blank" rel="noopener noreferrer">Book a Plain Ticket  </a>

        </div>
        <div class="shortcode_right"><img src="images/mkm.png"></div>
      </div>


      
      <div class="shortcode_section_2">
        <div class="shortcode_right"><img src="images/cour.png"></div>
        <div class="shortcode_left border_left_0">
          <h1 class="heading_text">Coursera</h1>
          
          <a href="https://www.coursera.org/" class="button" target="_blank" rel="noopener noreferrer">Explore More Courses</a>
         
        </div>
      </div>


      <div class="shortcode_section_2">
        <div class="shortcode_left">
          <h1 class="heading_text">Udemy</h1>
          <a href="https://www.udemy.com/" class="button" target="_blank" rel="noopener noreferrer">Learn Technical Things  </a>

        </div>
        <div class="shortcode_right"><img src="images/udemy.png"></div>
      </div>















      //

    </div>


  </div>
  <!-- shortcode section end -->
  
  <!-- testimonial section end -->
  <!-- contact section start -->
  
  <!-- contact section end -->
  
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">2023 All Rights Reserved. Design by Team Nequit,IASF 2023</a></p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript -->
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>