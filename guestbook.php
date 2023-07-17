<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'feedback';

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Guest Book</h2>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
        echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
        echo "<p><strong>Branch:</strong> " . $row['branch'] . "</p>";
        echo "<p><strong>Cuisine:</strong> " . $row['cuisine'] . "</p>";
        echo "<p><strong>Date of Visit:</strong> " . $row['date_of_visit'] . "</p>";
        echo "<p><strong>Cleanliness:</strong> " . $row['cleanliness'] . "</p>";
        echo "<p><strong>Service Quality:</strong> " . $row['service_quality'] . "</p>";
        echo "<p><strong>Feedback:</strong> " . $row['feedback'] . "</p>";
        echo "</div>";
        echo "<hr>";
    }
} else {
    echo "No entries found in the guest book.";
}

mysqli_close($conn);
?>
