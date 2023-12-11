<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

$conn = new mysqli($servername, $username, $password,$dbname);

$username = "JohnDoe";
$email = "john@example.com";

$username2 = "DoeJohn";
$email2 = "doe@example.com";

$sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

$sql = "INSERT INTO users (username, email) VALUES ('$username2', '$email2')";

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

?>