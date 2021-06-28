<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/icon.png') }}" sizes="16x16" type="image/png">
    <title>UICORE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>

  <body>
    <header>
      <!-- Awal Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
        <a class="navbar-brand" href="#"><i class="bi-box" style="margin-right: 8px; font-size: 1.55rem; font-weight: 600;"></i>UICORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faq">FAQ</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Awal Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container-jumbotron">
          <img class="ilustrasi mx-auto d-block" src="{{ asset('img/ilustrasi.png') }}" alt="Gambar ilustrasi">
          <article>
            <h1 class="display-4">THE BEST<br>UI DESIGNER<br>OVER IN THE WORLD</h1>
            <p class="lead">Creating digital experiences that simplify and enrich lives. Unmatched prototype design.</p>
            <p class="mt-5"><a class="button" href="#about">LEARN MORE</a></p>
          </article>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffff" fill-opacity="1" d="M0,160L26.7,181.3C53.3,203,107,245,160,218.7C213.3,192,267,96,320,90.7C373.3,85,427,171,480,224C533.3,277,587,299,640,293.3C693.3,288,747,256,800,224C853.3,192,907,160,960,154.7C1013.3,149,1067,171,1120,192C1173.3,213,1227,235,1280,213.3C1333.3,192,1387,128,1413,96L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
      </div>
    </header>

    <section>
      <!-- Tentang Website -->
      <div id="about">
        <h2 class="title">WHO ARE WE ?</h2>
        <div class="row">
          <div class="col-xl-7 mb-3">
            <p class="lead">We work in the UI design field, from mobile application design to websites. Our team is very consistent in designing creative and innovative UI designs. we are your solution to meet your application or website design needs. what are you waiting for, subscribe immediately.</p>
          </div>
          <div class="col-xl-5">
            <img class="img-about mx-auto d-block" src="{{ asset('img/about-ilustration.png') }}" alt="Gambar ilustrasi">
          </div>
        </div>
      </div>

      <!-- Awal Card -->
      <div id="slogan">
        <h2 class="title">WORK WITH US</h2>
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <i class="bi-hourglass-split" style="font-size: 5rem; font-weight: 400; color: #6969F8; padding: 0;"></i>
              <h5 class="card-title">Fast Work</h5>
              <p class="card-text mt-2">We prioritize speed and accuracy in work but with attention to quality and professionalism because satisfaction is number one.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <i class="bi-cash-stack" style="font-size: 5rem; font-weight: 400; color: rgb(248, 83, 83);"></i>
              <h5 class="card-title">Affordable Prices</h5>
              <p class="card-text mt-2">Even though we offer our services at affordable prices, we still work as much as possible because customer satisfaction is our main vision.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <i class="bi-chat-dots" style="font-size: 5rem; font-weight: 400; color: rgb(0, 202, 0);"></i>
              <h5 class="card-title">7x24 Live Support</h5>
              <p class="card-text mt-2">We are always on standby wherever and whenever you are if you want a consultation about our services just by contacting via our social media or email.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Awal Project -->
      <div id="daftar-project">
        <h2 class="title">OUR PROJECT</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
            <div class="card">
              <img src="{{ asset('img/UI-1.png') }}" class="card-img-top img-project" alt="Ui Kit" height="255">
              <div class="card-body">
                <h5 class="card-title text-center">FireFit - Tracker App</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
            <div class="card">
              <img src="{{ asset('img/UI-2.jpg') }}" class="card-img-top img-project" alt="Ui Kit" height="255">
              <div class="card-body">
                <h5 class="card-title text-center">FindGo - Location App</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
            <div class="card">
              <img src="{{ asset('img/UI-3.jpg') }}" class="card-img-top img-project" alt="Ui Kit" height="255">
              <div class="card-body">
                <h5 class="card-title text-center">Public Transportation App</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
            <div class="card">
              <img src="{{ asset('img/UI-4.jpg') }}" class="card-img-top img-project" alt="Ui Kit" height="255">
              <div class="card-body">
                <h5 class="card-title text-center">Kids Sport Social Media</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
            <div class="card">
              <img src="{{ asset('img/UI-5.jpg') }}" class="card-img-top img-project" alt="Ui Kit" height="255">
              <div class="card-body">
                <h5 class="card-title text-center">Hiking Concept</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
            <div class="card">
              <img src="{{ asset('img/UI-6.jpg') }}" class="card-img-top img-project" alt="Ui Kit" height="255">
              <div class="card-body">
                <h5 class="card-title text-center">Healthy Food Restaurant</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- order Website -->
      <div id="join">
        <h2 class="title">ORDER NOW</h2>
        <p class="lead text-center">Lets order just with one click and become one of the millions of people around the world who have put their trust in UICORE.</p>
        <p class="text-center mt-5"><a class="button-2" href="/order">LETS ORDER NOW</a></p>
      </div>
    </section>

    <footer>
      <p> Copyright &#169; 2021, All rights reserved.</p>
      <i class="bi-box" style="font-weight: 400; margin-right: 5px;"></i><span>UICORE</span>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>

</html>