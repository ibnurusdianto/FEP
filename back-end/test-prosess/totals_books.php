<?php
//$pdo = new PDO('mysql:host=localhost;dbname=fep', 'root', '');
//
//$sql = "SELECT COUNT(*) AS total_books FROM books";
//$stmt = $pdo->query($sql);
//$result = $stmt->fetch(PDO::FETCH_ASSOC);
//$totalBooks = $result['total_books'];
//
//$maxBooks = 1000; // Replace 1000 with the actual maximum number of books
//$sqlMaxBooks = "SELECT MAX(id) AS max_books_id FROM books";
//$stmtMaxBooks = $pdo->query($sqlMaxBooks);
//$resultMaxBooks = $stmtMaxBooks->fetch(PDO::FETCH_ASSOC);
//$maxBooks = $resultMaxBooks['max_books_id'];
//
//
//echo "<div class='info'>";
//echo "<h3>Total Books</h3>";
//echo "<h1>$totalBooks</h1>";
//echo "</div>";

$pdo = new PDO('mysql:host=localhost;dbname=fep', 'root', '');
$sql = "SELECT COUNT(*) AS total_books FROM books";
$stmt = $pdo->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$totalBooks = $result['total_books'];
echo "<p class='card-text'>$totalBooks</p>";
?>
