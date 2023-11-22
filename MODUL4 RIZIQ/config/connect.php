<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "modul4";
// 
$conn = mysqli_connect($servername, $username, $password, $database);
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
// 
 
?>