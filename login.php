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
    <link rel="stylesheet" href="my-css/login'.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
    <title>FEB (Free E-Books Portal) - Login page</title>
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
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
            <a href="register.html" class="btn btn-info" role="button">Register</a>
            <a href="admin.html" class="btn btn-warning" role="button">Contact Admin</a>
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
<!--End Modals-->

<!--Login page-->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
            <div class="featured-image mb-3">
                <img src="img/319.jpg" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Login page</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Access all E-books for free</small>
        </div>
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                </div>
                <div class="input-group mb-1 py-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="row">
                    <small>Forgot password? <a href="#" class="btn btn-danger" role="button">Forgot Password</a></small>
                </div>
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-lg btn-light w-100 fs-6"><img src="img/319.jpg" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
            </div>
            <div class="row">
                <small>Don't have account? <a href="register.php" class="btn btn-success" role="button">Sign Up</a></small>
            </div>
        </div>
    </div>
</div>
</div>
<!--End Login page-->

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