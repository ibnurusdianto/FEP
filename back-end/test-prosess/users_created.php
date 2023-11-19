<?php
function getNewUsers()
{
    $conn = new mysqli('localhost', 'root', '', 'fep');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users ORDER BY registeredAt DESC LIMIT 50";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='user'>";
            echo "<img src='../../img/me.jpeg'>";
            echo "<h2>" . $row["username"] . "</h2>";
            echo "<p>" . time_elapsed_string($row["registeredAt"]) . "</p>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
getNewUsers();
