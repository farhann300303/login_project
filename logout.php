<?php
session_start();
session_destroy(); // Hapus session
header("Location: login.html"); // Redirect ke halaman login
exit();
?>