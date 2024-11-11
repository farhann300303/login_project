<?php
// Mulai session
session_start();

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh username dan password (sebaiknya simpan di database)
    $valid_username = "admin";
    $valid_password = "password123";

    // Cek username dan password
    if ($username === $valid_username && $password === $valid_password) {
        // Set session dan redirect
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Username atau password salah.";
    }
}
?>