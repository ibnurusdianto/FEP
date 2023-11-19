<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<script type="text/javascript">';
    echo 'if (confirm("Are you sure?")) {';

    // Delete the book
    $deleteBook = "DELETE FROM books WHERE id = '$id'";
    $conn->query($deleteBook);

    // Reorder the IDs
    $reorderIDs = "SET @count = 0; UPDATE `books` SET `books`.`id` = @count:= @count + 1; ALTER TABLE `books` AUTO_INCREMENT = 1;";
    $conn->multi_query($reorderIDs);

    echo 'alert("Book deleted successfully.");';
    echo '} else {';
    echo 'alert("Book deletion cancelled.");';
    echo '}';
    echo '</script>';
}

$conn->close();
?>