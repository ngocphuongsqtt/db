<?php
$servername = "localhost";
$username = "root";
$password = "M@tkh@u991996";
$dbname = "porn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE login (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(3000) NOT NULL,
password VARCHAR(3000) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

INSERT INTO login (username, password)
VALUES ('admin', 'M@tkh@u991996');

$conn->close();
?>