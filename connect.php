<?php
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "log";

// Create connection
$conn = new mysqli($serverName, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
// $name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to insert data into the table
$sql = "INSERT INTO login (email,password) VALUES ('$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>