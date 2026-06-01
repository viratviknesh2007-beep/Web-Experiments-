<?php
session_start();
// Store user info in a Session
$_SESSION["user"] = "Viknesh"; 

// Store a Cookie that lasts for 1 day
setcookie("user_pref", "Dark Mode", time() + (86400 * 1), "/"); 

echo "<h1>Session and Cookie Set!</h1>";
echo "<a href='page2.php'>Go to Page 2 to see the Magic</a>";
?>