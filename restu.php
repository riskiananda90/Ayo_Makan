<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Album example · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <body class="fs-5">
        <nav class="navbar navbar-expand-lg fixed-top  bg-body-tertiary shadow mb-10 ">
            <div class="container-fluid">
                <h3 class="nav-item mr-3"><span class="text-danger">Go</span>Eat</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item  m-2 mr-4">
                            <a class="nav-link" aria-current="page" href="restu.php">Home</a>
                        </li>
                        <li class="nav-item  m-2 mr-4">
                            <a class="nav-link" href="restu.php">Rekomendasi</a>
                        </li>
                        <li class="nav-item  m-2 mr-4">
                            <a class="nav-link" href="restu.php">FAQ</a>
                        </li>
                    </ul>
                    <ul class="d-flex nav-item navbar-nav mb-2 mb-lg-0">
                        <div id="searchContainer" class="d-none mt-3">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                        <li class="nav-item mt-3 me-3"><a href="#"><i class="bi bi-search bg-danger text-white  rounded p-2" onclick="toggleSearch()"></i></a></li>
                        <li class="nav-item m-2 me-4"><a class="nav-link border border-danger rounded" aria-current="page" href="#">Log in</a></li>
                        <li class="nav-item m-2 me-4"><a class="nav-link bg-danger rounded text-black" aria-current="page" href="#">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="container ">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5  border-top">
                    <div class="col">
                        <div class="card shadow-sm">
                            <video id="myVideo" class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster4.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <video id="myVideo" class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster3.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <video class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster4.mp4" type="video/mp4">
                            </video>
                        </div>

                    </div>
                    <div class="col">
                        <div id="myVideo" class="card shadow-sm">
                            <video class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster6.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col">
                        <div id="myVideo" class="card shadow-sm ">
                            <video class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster7.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="album py-5 bg-body-tertiary ">
                <div class="container ">
                    <h3>Makanan Populer</h3>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto1.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 5.3</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch -8"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto2.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 7.8</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto3.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 9.0</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto.4.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 8.9</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto5.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 8.9</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto6.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 8.9</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto7.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 8.9</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto8.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 8.9</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/gambar/foto9.jpg" alt="">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-star-fill"></i> 8.9</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">beli</button>
                                        </div>
                                        <small class="text-body-secondary"><i class="bi bi-stopwatch"></i> 5 menit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <h1><span class="text-primary">GO</span> EAT</h1>
                    <p>Lorem ipsum dolor sit amet consectetur beatae accusantium quis?</p>
                    <p class="text-body-secondary">&copy; 2023</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>
            </footer>
        </div>
        <script>
            function toggleSearch() {
                var searchContainer = document.getElementById('searchContainer');
                searchContainer.classList.toggle('d-none');
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Autoplay the video when the page is loaded
            document.addEventListener('DOMContentLoaded', function() {
                var myVideo = document.getElementById('myVideo');
                myVideo.play();
            });
        </script>

    </body>

</html>