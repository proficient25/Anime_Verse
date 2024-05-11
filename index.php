<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<style></style>
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg  " style="background-color:#3f7764">
  <div class="container-fluid">
  <a class="navbar-brand" href="carouselExampleCaptions" style="font-size: larger;">
      <img src="images\Anime World Logo 1.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
<b>Anime World</b>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#carouselExampleCaptions"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#about"><b>About Us</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery"><b>Gallery</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"><b>Contact Us</b></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-secondary"  type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false"  >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\Demon Slayer 1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Demon Slayer</h2>
          <a href="facebook.com"  class="btn btn-success" role="button">Download</a> 
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Jujutsu Kaisen 1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Jujutsu Kaisen</h2>
          <a href="facebook.com" class="btn btn-success" role="button">Download</a> 
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\Solo Leaveling 1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Solo Leaveling</h2>
          <a href="facebook.com" class="btn btn-success" role="button">Download</a> 
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- About Us -->
  <section class="my-3" id="about">
    <div class="py-2">
      <hr>
      <h2 class="text-center">About Us</h2>
      
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/All Anime.jpg" alt="" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="dislay-4 center1">Amine Verse</h2>
          <p class="py-3">This website provide best anime download link and suggest trending anime for anime lovers. Get in touh for letest updates. If you want to contact us go below in contact us section. We also provide direct download links of anime. You can click below links for best anime download website.</p>
          <a href="about.php" class="btn btn-primary">Link 1</a>
          <a href="about.php" class="btn btn-primary">Link 2</a>
          <a href="about.php" class="btn btn-primary">Link 3</a>
          <a href="about.php" class="btn btn-primary">Link 4</a>
          <a href="about.php" class="btn btn-primary">Link 5</a>
          <a href="about.php" class="btn btn-primary">Link 6</a>
          <a href="about.php" class="btn btn-primary">Link 7</a>
          <a href="about.php" class="btn btn-primary">Link 8</a>
        </div>
      </div>
    </div>

  </section>
  <!-- Best anime ever -->
  <section class="my-3" ">
    <div class="py-2">
      <h2 class="text-center">Best Anime Ever</h2>

    </div>
    <div class="Container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images\Aot Poster (2).jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Attack On Titan</h4>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <a href="" class="btn btn-primary">Download Link</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images\One Piece Poster.jpeg" alt="">
            <div class="card-body">
              <h4 class="card-title">One Piece</h4>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <a href="" class="btn btn-primary">Download Link</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images\Naruto Poster.jpeg" alt="">
            <div class="card-body">
              <h4 class="card-title">Naruto</h4>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <a href="" class="btn btn-primary">Download Link</a>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- gallery -->
  <section class="my-3" id="gallery">
    <div class="py-2">
      <h2 class="text-center">Gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T2.jpg" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T3.jpg" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T4.jpg" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T1.jpg" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T5.jpg" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T6.jpe" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T7.jpe" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T8.jpg" alt="" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images\T9.jpeg" alt="" class="img-fluid pb-3">
        </div>
      </div>
    </div>
  </section>
 </div>
  </section>
  <!-- contact -->
  <section class="my-3" id="contact">
    <div class="py-2">
      <h2 class="text-center">Contact Us</h2>
   </div>
   <div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label for="">Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Mobile No.</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Comment</label>
      <textarea name="comments" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success my-2">Submit</button>
  </form>
</div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center" >Pravin Ram
  </p>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>