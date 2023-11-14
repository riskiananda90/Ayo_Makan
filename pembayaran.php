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
  <link rel="stylesheet" href="css/pembayaran.css" />
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

  <section class="m-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-7 mx-3">
          <div class="container border rounded p-4 mb-5">
            <h1 class="fs-4 fw-bold text">Pengantaran</h1>
            <hr>
            <div class="ratio ratio-21x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1986.9491228256495!2d97.15789107686088!3d5.120096374141036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304777a35c813bbf%3A0xfac9e2831347f07f!2sPoliteknik%20Negeri%20Lhokseumawe!5e0!3m2!1sid!2sid!4v1699455647053!5m2!1sid!2sid" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <form action="" class="fs-6">
              <div class="my-3">
                <label for="detail-alamat" class="form-label">Detail Alamat</label>
                <input type="text" class="form-control" id="detail-alamat" aria-describedby="alamat">
              </div>
              <div class="mb-3">
                <label for="detail-lokasi" class="form-label">Detail lokasi</label>
                <input type="text" class="form-control" id="detail-lokasi">
              </div>
              <div class="mb-3">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="catatan" id="catatan" style="height: 100px"></textarea>
                  <label for="catatan">Catatan</label>
                </div>
              </div>
              <button type="submit" class="btn btn-danger">Submit</button>
            </form>
          </div>

          <div class="container border rounded p-4">
            <h1 class="fs-4 fw-bold text">Pembayaran</h1>
            <hr>
            <form action="">
              <select class="form-select p-3" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </form>
          </div>

        </div>

        <div class="col-4 p-4 mx-2 border h-25">
          <h1 class="fs-4 fw-bold text">Pesanan Kamu</h1>
          <h2 class="fs-6">KFC</h2>
          <div class="container d-flex mt-4">
            <p class="fs-6 mb-0" style="white-space: nowrap;">Nasi Lemak KFC</p>
            <div class="d-flex justify-content-end">
              <div class="ms-auto">
                <div class="text-end">
                  <img src="Image/KFC Nasi Lemak KFC.jpeg" alt="" class="img-thumbnail w-75">
                </div>
                <div class="nambah d-flex fs-5 justify-content-end mt-2">
                  <i class="fa fa-plus-circle align-self-center" aria-hidden="true"></i>
                  <p class="text-center px-5 mb-0">1</p>
                  <i class="fa fa-minus-circle align-self-center" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="container">
            <div class="d-flex justify-content-between">
              <p class="fs-6">Subtotal</p>
              <p class="fs-6">46.000</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="fs-6">Ongkos Kirim</p>
              <p class="fs-6">46.000</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="fs-6">biaya pemesanan </p>
              <p class="fs-6">46.000</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="fixed-bottom bg-light p-3">
    <div class="container">
      <div class="row text-center d-flex align-items-center justify-content-center">
        <div class="col-md-6">
          <p class="fs-5 fw-bold">Total Harga</p>
          <p class="fs-6 fw-semibold">100.000</p>
        </div>
        <div class="col-md-6">
          <button type="button" class="btn btn-danger">Proses Pembayaran</button>
        </div>
      </div>
    </div>
  </footer>
  <footer class="p-3">
    <div class="container">
      <div class="row text-center d-flex align-items-center justify-content-center">
        <div class="col-md-6">
          <p class="fs-5 fw-bold">Total Harga</p>
          <p class="fs-6 fw-semibold">100.000</p>
        </div>
        <div class="col-md-6">
          <button type="button" class="btn btn-danger">Proses Pembayaran</button>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>