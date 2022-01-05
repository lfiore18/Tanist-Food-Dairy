<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Food and Dairy Trewithen</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="./custom.css">
  </head>

  <body class="text-color-main">
  <?php include "Partial Views/header.php"?>
  <div class="bg-svg">
    <main class="container">
      <div class="vh-100 row align-items-center justify-content-center">
        <div class="col-12 col-lg-5 mt-5 mt-lg-0">
          <h1 class="font-weight-semibold display-4 mb-3">Authentic<br><span class="font-playfair" style="background-color: black; font-weight: 500"><i style="color: white">Cornish</i></span> Dairy<br>Since 1976</h1>
          <p class="mb-4 col-8">A range of delicious and authentic cornish products available for delivery.</p>
          <a class="btn btn-outline-dark font-weight-semibold rounded-pill px-5 py-2 text-nowrap">Order Now<i class="fas fa-calendar-plus pl-md-2"></i></a>
        </div>
        <div class="col-lg-5 pt-5 d-lg-flex d-none">
          <div class="col-12 col-lg-12 p-0 ml-lg-n3 mt-lg-n3 mb-0 mb-lg-2 d-flex flex-row">
            <div class="col-6 d-none d-lg-flex flex-column">
              <div class="col-12 p-2">
                <img class="img-fluid d-none d-md-inline rounded shadow-sm" src="assets/TiramisugoCoffee.jpg" alt="Coffee"/> 
              </div>
              <div class="col-12 p-2">  
                <img class="img-fluid d-none d-md-inline rounded shadow-sm" src="assets/ClottedCream.jpeg" alt="Clotted Cream"/>
              </div>
            </div>
            <div class="col-6 d-none d-lg-flex flex-column">
              <div class="col-12 p-2">
                <img class="img-fluid d-none d-md-inline rounded shadow-sm" src="assets/RoddasButter.jpg" alt="Roddas Butter"/> 
              </div>
              <div class="col-12 p-2">
                <img class="img-fluid d-none d-md-inline rounded shadow-sm" src="assets/CurdsCroust.jpg" alt="Curds Croust Cheesemakers"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <div class="s-anchor bg-color-cream">
    <div class="container vh-100 d-lg-block d-none py-5">
      <h1 class="my-5 text-center font-weight-semi-bold">Featured Products</h1>
      <div id="cards" class="row row-cols-1 row-cols-md-3 g-4">
        <!-- INSERT CARDS HERE -->
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <script>
    $(function () {
      $(document).scroll(function () {
        let $nav = $(".fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });
  </script>
  </body>
</html>