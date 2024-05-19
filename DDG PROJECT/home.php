<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Jika pengguna belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    margin-top: 50px;
    color: #333;
}

p {
    text-align: center;
    margin-top: 20px;
    color: #666;
}

a {
    text-align: center;
    margin-top: 20px;
    color: #333;
    text-decoration: none;
}
    </style>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>Your email: <?php echo htmlspecialchars($email); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>