<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
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
            <a href="dashboard.php">
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
        </div>
    </aside>
    <!-- End of Sidebar Section -->

    <!-- Main Content -->
    <main>
        <h1>Analytics</h1>
        <!-- Analyses -->
        <div class="analyse">
            <div class="card text-center">
                <div class="card-body">
                    <h2 class="card-title">Total Buku</h2>
                    <h2 class="card-text"><?php include '../../back-end/test-prosess/totals_books.php'?></h2>
                </div>
            </div>
        </div>
        <!-- End of Analyses -->

        <!-- New Users Section -->
        <div class="new-users">
            <h2>New Users</h2>
            <div class="user-list">
                <?php
                include '../../back-end/test-prosess/users_created.php'; // Memanggil file users_created.php untuk menampilkan data user yang sudah diregister
//                getNewUsers(); // Memanggil function getNewUsers() untuk menampilkan data user
                ?>
            </div>
        </div>
        <!-- End of New Users Section -->
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

<script src="orders.js"></script>
<script src="index.js"></script>
</body>

</html>