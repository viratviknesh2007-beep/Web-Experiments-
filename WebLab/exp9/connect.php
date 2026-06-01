<?php

$conn = new mysqli("localhost", "root", "", "exp9");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$product = $_POST['product'];

$sql = "INSERT INTO users (name, email, password, product)
VALUES ('$name', '$email', '$password', '$product')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Order Placed Successfully!</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>