<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
</head>
<body>
    <div class="container">
        <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>