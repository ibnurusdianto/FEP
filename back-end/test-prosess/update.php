<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fep";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $authorId = $_POST['authorId'];
    $genreId = $_POST['genreId'];
    $publishedAt = $_POST['publishedAt'];

    $sql = "UPDATE books SET title='$title', description='$description', authorId=$authorId, genreId=$genreId, publishedAt='$publishedAt' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="../../admin/admin-dashboard/dashboard.php">
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
</form>