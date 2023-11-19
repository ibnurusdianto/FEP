<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fep";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data buku dari database
$sql = "SELECT books.id, books.title, books.description, authors.name AS author, genres.name AS genre, books.publishedAt FROM books
        INNER JOIN authors ON books.authorId = authors.id
        INNER JOIN genres ON books.genreId = genres.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data buku ke dalam tabel HTML
//    echo "<table class='table-auto w-full'>
//          <thead>
//            <tr>
//              <th class='px-4 py-2'>Id</th>
//              <th class='px-4 py-2'>Judul Buku</th>
//              <th class='px-4 py-2'>Thumbnail</th>
//              <th class='px-4 py-2'>Deskripsi</th>
//              <th class='px-4 py-2'>Aksi</th>
//            </tr>
//          </thead>
//          <tbody>";
    while($row = $result->fetch_assoc()) {
        $bookId = $row["id"];
        echo "<tr>
    <td class='border px-4 py-2'>" . $bookId . "</td>
    <td class='border px-4 py-2'>" . $row["title"]. "</td>
    <td class='border px-4 py-2'><img src='../../img/me.jpeg' alt='" . $row["title"]. "' class='w-20'></td>
    <td class='border px-4 py-2'>" . $row["description"]. "</td>
    <td class='border px-4 py-2'>
      <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Download</button>
      <button class='bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded'>Lihat Online</button>
      <a href='../test-prosess/update.php?id=" . $bookId . "' class='bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded'>Update</a>
      <a href='../test-prosess/delete_books.php?id=" . $bookId . "' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>Delete</a>
      <button class='bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded'>Add</button>
    </td>
  </tr>";
    }
    echo "</tbody>
</table>";
} else {
    echo "0 results";
}
$conn->close();
?>