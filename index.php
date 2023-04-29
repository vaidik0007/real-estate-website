<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title>Document</title>
</head>
<body>

<?php
include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pexels-sevenstorm-juhaszimrus-439416.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>STAESMAN REAL ESTATE</h3>
        <p>PROFESSION IN MAKING BUILDIND</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="pexels-nextvoyage-1481105.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>STAESMAN REAL ESTATE</h3>
        <p>THINK DIFFERENT</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="pexels-avadh-8373204.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>STAESMAN REAL ESTATE</h3>
        <p>BEST PROJECTS !</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">
            GALLERY
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="pexels-arunkumar-rajapandiyan-5818261.jpg" class="img-fluid pb-4">
            
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="pexels-niki-nagy-1694360.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="pexels-keith-lobo-14702568.jpg" class="img-fluid pb-4">
                <div class="text-center mx-auto">
                <a href="gallary.php" class="btn btn-success">Check more</a>
                </div>
           

        </div>
    </div>    

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">
            Please give your details
        </h3>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post"> 
            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input type="email" name="email" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>suggest</label>
                <textarea class="form-control" name="comments" required>

                </textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">
            About US
        </h2>
    </div>
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="pexels-bhupinder-singh-13870968.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">STATESMAN REAL ESTATE</h2>
            <p class="py-4">Welcome to our STATESMAN REAL ESTATE,We are a full-service real estate company that is committed to providing our clients with the highest level of customer service and satisfaction. Our team is composed of experienced and knowledgeable professionals who are dedicated to helping you achieve your real estate goals. </p> 
            <p>please press Check more to know more about our real esate</p>
            <a href="about.php" class="btn btn-success">Check more</a>
        </div>
    </div>
 </div>
</section>


<footer>
    <h3 class="p-2 bg-dark text-white text-center"> Contact US : staesman@gmail.com</h3>
</footer>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  

</body>
</html>