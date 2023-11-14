<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="my-css/style.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
    <title>FEB (Free E-Books Portal)</title>
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="">FEP (Free E-Books Portal)</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        E-Books
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Horror</a></li>
                        <li><a class="dropdown-item" href="#">Science</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Others</a></li>
                    </ul>
                </li>
            </ul>
            <a href="login.php" class="btn btn-success" role="button">Login</a>
            <a href="register.php" class="btn btn-info" role="button">Register</a>
            <a href="admin.php" class="btn btn-warning" role="button">Contact Admin</a>
        </div>
    </div>
</nav>
<!--End Navbar-->

<!--Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Please login first!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                To access the ebook, you must first log in as a user. Please register if you don't have an account, and log in if you already have one
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-secondary" role="button">Cencel</a>
                <a href="login.php" class="btn btn-success" role="button">Login</a>
            </div>
        </div>
    </div>
</div>
<!--End Modal-->

<!--Hero Section-->
<div class="container">
    <div class="row">
        <div class="col-md-6 py-5">
            <p class="deskripsi-feb">FEP is a website service that provides a Free Ebook Portal, which can be accessed by users at no cost. This website is ideal for users who enjoy reading ebooks, ranging from horror stories, mysterious books, and more. All materials on the PEG website can be downloaded for free.</p>
            <a href="img/1553793629.webp" data-lightbox="image-1" data-title="My caption">
                <img data-aos="fade-right" src="img/1553793629.webp" class="img-thumbnail" alt="thumbnail-1" style="width:28%;">
            </a>
            <a href="img/Kumpulan-Nasihat-dan-Saripati-Kitab-Jawa-Kuno-3-e1548937839785.png" data-lightbox="image-1" data-title="My caption">
                <img data-aos="fade-right" src="img/Kumpulan-Nasihat-dan-Saripati-Kitab-Jawa-Kuno-3-e1548937839785.png" class="img-thumbnail" alt="thumbnail-2" style="width:28%;">
            </a>
            <a href="img/isi-buku-serat-centhini_169.png" data-lightbox="image-1" data-title="My caption">
                <img data-aos="fade-right" src="img/isi-buku-serat-centhini_169.png" class="img-thumbnail" alt="thumbnail-3" style="width:28%;">
            </a>
            <a href="img/efba9b81735b0af6951579ff3e8b2e24.jpeg" data-lightbox="image-1" data-title="My caption">
                <img data-aos="fade-right" src="img/efba9b81735b0af6951579ff3e8b2e24.jpeg" class="img-thumbnail" alt="thumbnail-4" style="width:28%;">
            </a>
            <a href="img/Fathul%20Qorib.jpg" data-lightbox="image-1" data-title="My caption">
                <img data-aos="fade-right" src="img/Fathul%20Qorib.jpg" class="img-thumbnail" alt="thumbnail-5" style="width:28%;">
            </a>
            <a href="img/kitab-henokh.jpg" data-lightbox="image-1" data-title="My caption">
                <img data-aos="fade-right" src="img/kitab-henokh.jpg" class="img-thumbnail" alt="thumbnail-6" style="width:28%;">
            </a>
        </div>
        <div class="col-md-6 py-5">
            <img src="img/gambar-hero.jpg" class="img-fluid" alt="img-hero">
        </div>
    </div>
</div>
<!--End Hero Section-->


<!--Team Pengembang-->
<div class="container text-center py-5">
    <h3 >Team</h3>
    <h4 class="text-muted">Thank you to my Quran teacher and JKT48 member, Kathrina Irene, for inspiring me to develop the FEP website.</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        <div class="col">
            <div class="card">
                <img src="img/kiyai-suchban.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Romo KH Suchban Ma'ruf</h5>
                    <p class="card-text">KH Suchban Ma'ruf Pendiri Ponpes Al-Barkah</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-linkedin"></i>
                    <i class="bi bi-envelope-fill"></i>
                    <i class="bi bi-whatsapp"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/me.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ibnu Rusdianto</h5>
                    <p class="card-text">Pengembang Website -  FEB (Free Ebook Portal)</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-linkedin"></i>
                    <i class="bi bi-envelope-fill"></i>
                    <i class="bi bi-whatsapp"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/kathirna.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kathrina Irene</h5>
                    <p class="card-text">Anggota JKT48 | Kathrina Irene</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-linkedin"></i>
                    <i class="bi bi-envelope-fill"></i>
                    <i class="bi bi-whatsapp"></i>
                </div>
            </div>
        </div>

    </div>
</div>
<!--End Team Pengembang-->

<!--Partner-->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h3 class="fs-6 text-secondary mb-2 text-uppercase text-center">Our Clients</h3>
                <h2 class="mb-4 display-5 text-center">Trusted by over 786+ clients.</h2>
                <p class="fs-5 text-secondary mb-5 text-center">Our clients are our top priority, and we are committed to providing them with the highest level of service.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container overflow-hidden">
        <div class="row gy-4">
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/nu.jpg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/google.webp" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/yt.webp" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/319.jpg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-08-22%20at%2021.03.02.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-08-22%20at%2021.03.11.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-08-24%20at%2020.59.19.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-08-25%20at%2020.04.38.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-08-29%20at%2020.56.51.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-09-15%20at%2019.56.20.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-09-19%20at%2020.56.41.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
                <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                    <img src="img/WhatsApp%20Image%202023-09-19%20at%2020.56.41.jpeg" alt="Partner logo" width="100%" height="150">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Partner-->

<!--Footer-->
<footer class="text-center text-lg-start text-white" style="background-color: #929fba">
    <div class="container p-4 pb-0">
        <section>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">FEB (Free E-Books Portal)</h6>
                    <p>FEP is a website service that provides a Free Ebook Portal, which can be accessed by users at no cost. This website is ideal for users who enjoy reading ebooks, ranging from horror stories, mysterious books, and more. All materials on the PEG website can be downloaded for free.</p>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
                    <p><a class="text-white">Home</a></p>
                    <p><a class="text-white">About</a></p>
                    <p><a class="text-white">Login</a></p>
                    <p><a class="text-white">Register</a></p>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> Subang, Pusakajaya, Cigugur Kidul</p>
                    <p><i class="fas fa-envelope mr-3"></i> ibnu.rusdianto55@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 628988167543</p>
                    <p><i class="fas fa-print mr-3"></i> + 628176543637</p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright: <a class="text-white" href="https://mdbootstrap.com/">Ibnu Rusdianto, Repository Github</a>
    </div>
</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
<script>
    AOS.init();
    // Mendapatkan semua item dropdown
    var dropdownItems = document.querySelectorAll('.dropdown-item');

    // Menambahkan event listener ke setiap item
    for (var i = 0; i < dropdownItems.length; i++) {
        dropdownItems[i].addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah aksi default (navigasi)

            // Menampilkan modal
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        });
    }
</script>
</body>
</html>