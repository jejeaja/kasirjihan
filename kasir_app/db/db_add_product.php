<?php
session_start();
require_once('db_connection.php');

if(isset($_POST['add_product'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $jumlah = $_POST['jumlah'];

    $kode_unik = uniqid();

    $stmt = $conn->prepare("INSERT INTO products (nama_produk, harga_produk, jumlah, kode_unik) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdis", $nama_produk, $harga_produk, $jumlah, $kode_unik);

    if($stmt->execute()) {
        echo "Product added successfully!";
        $stmt->close();
        header('Location: ../pages/kasir/manage_product.php');
        exit;
    } else {
        echo "Failed to add product. Error: " . $stmt->error;
    }
}
?>