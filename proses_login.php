<?php 
session_start();
require_once("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Fetch user from the database
$sql = "SELECT * FROM tb_daftar WHERE username=?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$query = $stmt->get_result();
$hasil = $query->fetch_assoc();

if ($query->num_rows == 0) {
    echo "<div align='center'>Username belum terdaftar! <a href='login.php'>Kembali</a></div>";
} else {
    if ($password != $hasil['password']) {
        echo "<div align='center'>Password salah! <a href='login.php'>Kembali</a></div>";
    } else {
        // Check if user already has an active session token
        if (!empty($hasil['session_token'])) {
            // User already logged in somewhere else
            echo "<div align='center'>Anda sudah login di perangkat lain! <a href='logout.php'>Logout</a></div>";
        } else {
            // Generate a unique session token
            $session_token = bin2hex(random_bytes(32));

            // Update the session token in the database
            $update = $koneksi->prepare("UPDATE tb_daftar SET session_token = ? WHERE id = ?");
            $update->bind_param("si", $session_token, $hasil['id']);
            $update->execute();

            // Store the session token in the session
            $_SESSION['username'] = $hasil['username'];
            $_SESSION['session_token'] = $session_token;

            header('Location: admin2.php');
        }
    }
}
?>
