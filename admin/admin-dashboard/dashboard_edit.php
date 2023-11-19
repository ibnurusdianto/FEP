<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/dash-style.css">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>-->
    <!--    <link rel="stylesheet" href="../../css/bootstrap.css">-->
    <!--    <link rel="stylesheet" href="../../css/bootstrap-utilities.css">-->
    <!--    <link rel="stylesheet" href="../../css/bootstrap-grid.css">-->
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!--    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">-->
</head>

<body>
<?php
session_start();

function logout()
{
    // Unset all of the session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect to the login page or any other page after logout
    header("Location: ../../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    logout();
}
?>
<div class="container">
    <!-- Sidebar Section -->
    <aside>
        <div class="toggle">
            <div class="logo">
                <h2>FEP<span class="danger"> Free E-Books Portal</span></h2>
            </div>
            <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
            </div>
        </div>

        <div class="sidebar">
            <a href="#">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                <h3>Dashboard</h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                <h3>Users</h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                <h3>History</h3>
            </a>
            <a href="#" class="active">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                <h3>Analytics</h3>
            </a>
            <a href="../../index.php?logout=true" onclick="return confirm('Are you sure for logout this site?')">
                <span class="material-icons-sharp"> logout </span>
                <h3>Logout</h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                <h3>Logout</h3>
            </a>
        </div>
    </aside>
    <!-- End of Sidebar Section -->

    <!-- Main Content -->
    <main>
        <h1>Dashboard</h1><br><br><br>
        <form method="post" action="">
            <label for="id">ID:</label><br>
            <input type="text" id="id" name="id"><br>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description"><br>
            <label for="authorId">Author ID:</label><br>
            <input type="text" id="authorId" name="authorId"><br>
            <label for="genreId">Genre ID:</label><br>
            <input type="text" id="genreId" name="genreId"><br>
            <label for="publishedAt">Published At:</label><br>
            <input type="text" id="publishedAt" name="publishedAt"><br>
            <input type="submit" value="Update">
            <?php
            include '../../back-end/test-prosess/books_tables.php';
            include '../../back-end/test-prosess/delete_books.php';
//            include '../../back-end/test-prosess/update.php';
            ?>
        </form>
    </main>
    <!-- End of Main Content -->

    <!-- Right Section -->
    <div class="right-section">
        <div class="nav">
            <button id="menu-btn">
            <span class="material-icons-sharp">
                menu
            </span>
            </button>
            <div class="dark-mode">
            <span class="material-icons-sharp active">
                light_mode
            </span>
                <span class="material-icons-sharp">
                dark_mode
            </span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Hey, <b><?php echo $_SESSION['username']; ?></b></p>
                </div>
                <div class="profile-photo">
                    <img src="../../img/me.jpeg">
                </div>
            </div>
        </div>
        <!-- End of Nav -->
    </div>

</div>

<script src="index.js"></script>
<!--<script src="../../js/bootstrap.bundle.js"></script>-->
<!--<script src="../../js/bootstrap.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>-->
</body>

</html>