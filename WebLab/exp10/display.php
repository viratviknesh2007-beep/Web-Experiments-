<?php
// 1. START SESSION (Must be the very first line)
session_start();

// Set a dummy session variable if one doesn't exist yet
if (!isset($_SESSION['user_name'])) {
    $_SESSION['user_name'] = "Viknesh"; 
}

// 2. DATABASE CONNECTION
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exp9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. FETCH DATA
$sql = "SELECT id, name, email, product FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Experiment 10 - Sessions & Cookies</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .session-box { 
            background-color: #f0f7ff; 
            border: 1px solid #007bff; 
            padding: 15px; 
            border-radius: 8px; 
            margin-bottom: 25px; 
        }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background-color: #eee; }
        .badge { background: #28a745; color: white; padding: 3px 8px; border-radius: 4px; font-size: 0.8em; }
    </style>
</head>
<body>

    <div class="session-box">
        <h2>Exercise 10: Session & Cookie Info</h2>
        <p><strong>Current Session User:</strong> <?php echo $_SESSION['user_name']; ?> <span class="badge">Active</span></p>
        
        <p><strong>Cookie Info:</strong> 
            <?php 
                if(isset($_COOKIE['last_visit'])) {
                    echo "Welcome back! Your last visit was: " . $_COOKIE['last_visit'];
                } else {
                    echo "This is your first visit! (Refresh the page to see the cookie)";
                    // Set a cookie for the next visit
                    setcookie("last_visit", date("h:i:sa"), time() + 3600, "/");
                }
            ?>
        </p>
    </div>

    <hr>

    <h1>Stored Order Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Product</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["product"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No results found</td></tr>";
        }
        $conn->close();
        ?>
    </table>

</body>
</html>