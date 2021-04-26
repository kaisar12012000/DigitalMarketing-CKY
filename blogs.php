<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Blogs and Articles..</title>
    <style>
        .blog-heading{
            top: 80%;
            transform: translateY(80%);
            margin: 48px;
        }
        h1 {
            margin: 10px;
            padding: 4px;
        }

        hr {
            width: 80px;
            background-color: #dc143c;
        }
        hr:not([size]){
            height: 2px;
        }
        .blog-intro a{
            text-decoration: none;
            color: #dc3546;
        }
        .blog-intro a:hover{
            color: #542e71;
            transition-property: all;
            transition-duration: 0.2;
        }
        .blog-content1 {
            margin: 200px 40px 0px 40px;/*margin: top right bottom left:*/
        }
        .blog-content {
            margin: 100px 40px 0px 40px;/*margin: top right bottom left:*/
        }
        .content-1,
        .content-2 {
            text-decoration: none;
            color: #212529;
            border: 1px solid #dcdcdc;
        }
        .content-1:hover,
        .content-2:hover{
            background-color: rgba(220,20,60,0.6);
            color: #fff;
            transition-property: all;
            transition-duration: 0.8s;
        }
    </style>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><div><img width = "100" height = "60" src="https://www.pngkey.com/png/detail/529-5291672_sample-logo-png-transparent-background.png" alt=""></div></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                  <li><a class="dropdown-item" href="#">Website Development</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="work.php">Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clients.php">Clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">New Delhi</a></li>
                  <li><a class="dropdown-item" href="#">Mumbai</a></li>
                  <li><a class="dropdown-item" href="#">Pune</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex">
              <button class="btn btn-danger" type="submit">Get Quote</button>
            </form>
          </div>
        </div>
    </nav>
      <!-------------------------------------------- Blogs page heading ------------------------------------------------------->
    <div class="blog-heading text-center">
        <h1>Blog</h1><center><hr></center>
        <p class="blog-intro">Branding is a type of marketing. In this a company decides to have a unique name, logo and ideology that is identified bya customer.
        However, the concept of Branding is a dynamic process and one needs to keep an eye on the latest patterns and trends that arte arising
        every second in the fields of <a href="#">Branding</a>, <a href="#">Marketing</a>, <a href="#">Content Promotion</a>, <a href="#">e-commerse</a> and
        <a href="#">Digital Marketing Stratergies</a>. </p>
    </div>

      <!-------------------------------------------- Blogs from will start here ------------------------------------------------------->
    <div class="blog-content1 row">
        <a href="blog.php" class="content-1 col-5">
            <h1 class="display-5">Blog-1: Demo Content 1</h1>
            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Minima consequuntur culpa tenetur laboriosam eos.
              Tempora, molestiae nam, distinctio ullam sequi vero esse minima iure ratione, molestias porro amet tenetur. Nisi!</p>
        </a>
        <div class="col-2"></div>
        <a href="blog.php" class="content-2 col-5">
            <h1 class="display-5">Blog-2: Demo Content 2</h1>
            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Minima consequuntur culpa tenetur laboriosam eos.
              Tempora, molestiae nam, distinctio ullam sequi vero esse minima iure ratione, molestias porro amet tenetur. Nisi!</p>
        </a>
    </div>
    <div class="blog-content row">
        <a href="blog.php" class="content-1 col-5">
            <h1 class="display-5">Blog-1: Demo Content 1</h1>
            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Minima consequuntur culpa tenetur laboriosam eos.
              Tempora, molestiae nam, distinctio ullam sequi vero esse minima iure ratione, molestias porro amet tenetur. Nisi!</p>
        </a>
        <a class="col-2"></a>
        <a href="blog.php" class="content-2 col-5">
            <h1 class="display-5">Blog-2: Demo Content 2</h1>
            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Minima consequuntur culpa tenetur laboriosam eos.
              Tempora, molestiae nam, distinctio ullam sequi vero esse minima iure ratione, molestias porro amet tenetur. Nisi!</p>
        </a>
    </div>
      <!-- carousel edn -->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>