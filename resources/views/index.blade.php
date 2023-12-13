<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <!-- FontAwesome 6.2.0 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- (Optional) Use CSS or JS implementation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>AyoMakan</title>
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg bg-body-white">
    <div class="container-fluid">
      <a class="navbar-brand ms-4" href="#"><img src="Image/AyoMakan.png" alt="" style="width: 120px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-dark" href="" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Rekomendasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">FAQ</a>
          </li>
          <li>
            <form class="d-flex my-lg-0">
              <input class="form-control  me-sm-2" type="text" placeholder="Search" style="width: 350px;">
              <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-danger my-sm-0" href="login.html" style="width: 100px;">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger my-sm-0" href="daftar.html" style="width: 100px;">Sign in</a>
          </li>
          <li class="nav-item">
            <a href="#shop"><i class="fas fa-shopping-cart " style="height: 30px; width: 30px; color: #dc4535;"></i></a>
          </li>
      </div>
    </div>
  </nav>

  <section class="main d-flex flex-column justify-content-center">
    <div class="row align-self-center my-5">
      <h1 class="display-1 text-white fw-bold" style="font-size: 52px;">Lorem ipsum<br>dolor sit amet.</h1>
    </div>
    <div class="row align-self-center my-5">
      <a href="#beli" class="btn btn-danger fs-5 fw-bold rounded-pill" style="width: 100px;">Beli</a>
    </div>
  </section>

  <section class="about m-5">
    <h2 class="text-center my-5">Why choose use</h2>
    <div class="row justify-content-center">
      <div class="col">
        <div class="card h-100 border-0 w-75 mx-auto">
          <img src="image/about1.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-0 w-75 mx-auto">
          <img src="image/about2.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-0 w-75 mx-auto">
          <img src="image/about3.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-center">
    <h2 class="text-center my-5">pilih menu makanan & minuman</h2>
    <div class="list-produk container-fluid my-5">
      <ul class="d-flex justify-content-center mx-auto">
        <li class="m-1">
          <img src="image/bakso1.jpeg" alt="" class="rounded-circle" height="140px" width="140px">
          <p class="fs-5 fw-semibold text-center">bakso</p>
        </li>
        <li class="m-1">
          <img src="image/bakso1.jpeg" alt="" class="rounded-circle" height="140px" width="140px">
          <p class="fs-5 fw-semibold text-center">bakso</p>
        </li>
        <li class="m-1">
          <img src="image/bakso1.jpeg" alt="" class="rounded-circle" height="140px" width="140px">
          <p class="fs-5 fw-semibold text-center">bakso</p>
        </li>
        <li class="m-1">
          <img src="image/bakso1.jpeg" alt="" class="rounded-circle" height="140px" width="140px">
          <p class="fs-5 fw-semibold text-center">bakso</p>
        </li>
        <li class="m-1">
          <img src="image/bakso1.jpeg" alt="" class="rounded-circle" height="140px" width="140px">
          <p class="fs-5 fw-semibold text-center">bakso</p>
        </li>
        <li class="m-1">
          <img src="image/bakso1.jpeg" alt="" class="rounded-circle" height="140px" width="140px">
          <p class="fs-5 fw-semibold text-center">bakso</p>
        </li>
        <li class="m-1">
          <img src="image/bakso1.jpeg" alt="" class="rounded-circle" height="140px" width="140px">
          <p class="fs-5 fw-semibold text-center">bakso</p>
        </li>
      </ul>
    </div>
    <h5><a href="more.html" class="btn btn-outline-danger md-5">More</a></h5>
  </section>

  <section>
    <h2 class="text-center mt-5">Food Discovery</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 0px 80px;">
      <div class="col">
        <div class="card h-100">
          <img src="image/bakso1.jpeg" class="card-img-top" alt="image/bakso1.jpeg" width="200" height="300">
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="image/bakso1.jpeg" class="card-img-top" alt="image/bakso1.jpeg" width="200" height="300">
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="image/bakso1.jpeg" class="card-img-top" alt="image/bakso1.jpeg" width="200" height="300">
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="image/bakso1.jpeg" class="card-img-top" alt="image/bakso1.jpeg" width="200" height="300">
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="image/bakso1.jpeg" class="card-img-top" alt="image/bakso1.jpeg" width="200" height="300">
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="image/bakso1.jpeg" class="card-img-top" alt="image/bakso1.jpeg" width="200" height="300">
        </div>
      </div>
    </div>
  </section>


  <section class="my-5">
    <div class="card flex-column justify-content-center align-items-center p-5 m-5 email-card">
      <h1 class="card-title mb-4"><b>Lorem ipsum dolor sit amet.</b></h1>
      <p class="card-text mb-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
        voluptates commodi exercitationem?
      </p>
      <form action="" class="container-fluid d-flex justify-content-center align-items-center">
        <input type="email" class="form-control w-75 h-25 p-3 m-3" id="exampleFormControlInput1" placeholder="name@example.com">
        <input type="submit" id="submit" class="btn btn-da p-3" value="Lorem" border: none;" />
      </form>
    </div>
  </section>



  <footer class="text-center text-lg-start bg-dark text-white mt-5">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>

      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="gambar/AyoMakan.png" alt="">
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
            <p>
              <a href="#!" class="text-reset">lorem</a>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i>Lorem, ipsum.</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> 12 34 56 78 90</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> 12 34 56 78 90</p>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">

      <p class="text-reset fw-bold">AyoMakan</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>