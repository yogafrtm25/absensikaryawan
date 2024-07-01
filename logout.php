<?php
session_start();
require_once("koneksi.php");

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Invalidate the session token in the database
    $update = $koneksi->prepare("UPDATE tb_daftar SET session_token = NULL WHERE username = ?");
    $update->bind_param("s", $username);
    $update->execute();
}

session_destroy();
header("Location: index.php");
exit();
?>
