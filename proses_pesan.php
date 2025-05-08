<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "warung_llibra";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nama = $_POST['nama'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$metode = $_POST['metode'];

$sql = "INSERT INTO pesanan (nama, menu, jumlah, metode) VALUES ('$nama', '$menu', $jumlah, '$metode')";

if (mysqli_query($conn, $sql)) {
    echo "Pesanan berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
