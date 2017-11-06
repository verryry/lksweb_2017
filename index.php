<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<body>
  <script type="text/javascript" src="js/index.js"></script>
  <?php require_once('header.php');?>
  <div class="atas">
    <div class="slideshow-container">
      <div class="mySlides">
        <div class="numbertext">1 / 3</div>
        <img src="slider/img_fjords_wide.jpg" style="width:100%">
        <div class="text">Amazing</div>
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img src="slider/img_mountains_wide.jpg" style="width:100%">
        <div class="text">Impossible</div>
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img src="slider/img_nature_wide.jpg" style="width:100%">
        <div class="text">Amazing</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>
  <div class="container">
    <div class="col-s-12 col-m-6 col-l-3" style="margin-left:12%;">
      <img src="men.png" style="width: 90px;margin-left: 33%;">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.  </p>
    </div>
    <div class="col-s-12 col-m-6 col-l-3">
      <img src="men.png" style="width: 90px;margin-left: 33%;">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Do </p>
    </div>
    <div class="col-s-12 col-m-6 col-l-3">
      <img src="men.png" style="width: 90px;margin-left: 33%;">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
    </div>
    <div class="sub-banner">
      <img src="ban.jpg">
    </div>
    <div class="go">
      <img src="assets/nature/1.jpg" width="200px" height="200px">
      <img src="assets/architecture/1.jpg" width="200px" height="200px">
      <img src="assets/people/1.jpg" width="200px" height="200px">
      <img src="assets/people/2.jpg" width="200px" height="200px">
      <?php 
      if (isset($_GET['image'])) {
        header("location:assets/".$_GET['image']."/index.php") ;
      }else if(isset($_GET['p'])){
        header('location:login.php');
    // include 'login.php';
      }

      ?>
    </div>
    <div class="footer-left">
      <footer>
        Copyright Gallery &copy; 2017 - All reversed SMKN 10 Jakarta
      </footer>
    </div>
    <div class="footer-right">
      <footer>
      <span class="fa-stack fa-lg">
        <a href="https://www.twitter.com/verrytabuti">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x"></i>
        </a>
      </span>
      <span class="fa-stack fa-lg">
        <a href="https://www.instagram.com/verry_ry">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-instagram fa-stack-1x"></i>
        </a>
      </span>
      <span class="fa-stack fa-lg"><a href="https://www.facebook.com/verrymetalic">
        <i class="fa fa-square-o fa-stack-2x"></i>
        <i class="fa fa-facebook-official fa-stack-1x"></i>
      </a>
    </span>
  </footer>
</div>