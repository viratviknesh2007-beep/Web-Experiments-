<?php

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$product = $_POST['product'];

// Validation
if (empty($name)) {
    echo "Name is required<br>";
}

if (empty($email)) {
    echo "Email is required<br>";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format<br>";
}

if (empty($password)) {
    echo "Password is required<br>";
} elseif (strlen($password) < 6) {
    echo "Password must be at least 6 characters<br>";
}

if (empty($product)) {
    echo "Please select a product<br>";
}

// If everything is correct
if (!empty($name) && !empty($email) && !empty($password) && !empty($product)) {
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Product: " . $product . "<br>";
}

?>