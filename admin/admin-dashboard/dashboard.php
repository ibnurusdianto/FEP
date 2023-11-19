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
    $_SESSION = array();
    session_destroy();
    header("Location: ../../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    logout();
}

include '../../back-end/config.php';

$mysqli = new mysqli('localhost', 'root', '', 'fep');
if ($mysqli instanceof mysqli) {
    if ($mysqli->connect_error) {
        die('Connection error: ' . $mysqli->connect_error);
    }
} else {
    die('Failed to create mysqli object');
}

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$books = []; // Initialize books as an empty array

$sql = "SELECT * FROM books";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
} else {
    echo "0 results";
}

if (isset($array['thumbnail'])) {
    // Access the 'thumbnail' key
    $thumbnail = $array['thumbnail'];
} else {
    // Handle the case where the 'thumbnail' key is not set
    $thumbnail = 'default_thumbnail';
}

$mysqli->close();

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
        <table class="table-auto w-full">
            <thead>
            <tr>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Judul Buku</th>
                <th class="px-4 py-2">Thumbnail</th>
                <th class="px-4 py-2">Deskripsi</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include '../../back-end/test-prosess/books_tables.php';
            // Assuming $books is the array of books fetched from the database
            foreach ($books as $book) {
                echo "<tr>";
                echo "<td><a href='../../back-end/test-prosess/delete_books.php?id=" . $book['id'] . "' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
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