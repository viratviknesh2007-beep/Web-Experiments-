<?php
session_start();
?>
<html>
<body>
    <h1>Exercise 10: Session & Cookie Retrieval</h1>

    <p><strong>Session Data:</strong> 
        <?php echo isset($_SESSION["user"]) ? "Welcome, " . $_SESSION["user"] : "No session found."; ?>
    </p>

    <p><strong>Cookie Data (User Preference):</strong> 
        <?php echo isset($_COOKIE["user_pref"]) ? $_COOKIE["user_pref"] : "No cookie found."; ?>
    </p>

    <br>
    <a href="page1.php">Back to Page 1</a>
</body>
</html>