<?php
session_start(); // Starts the session

// 1. Set a Session variable (remembers the user)
$_SESSION['username'] = "Viknesh";

// 2. Set a Cookie (remembers a preference, lasts 1 hour)
setcookie("last_product", "Laptop", time() + 3600, "/");

echo "<h1>Session & Cookie have been set!</h1>";
echo "<p>User: Viknesh | Last Viewed: Laptop</p>";
echo "<hr>";
echo "<a href='display.php'>Go to Display Page to see them in action</a>";
?>