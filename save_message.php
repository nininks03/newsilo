<?php
$conn = new mysqli("localhost", "root", "", "db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message send successfully!<a href='welcome.php'>Go to home</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
