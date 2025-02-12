<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    // sesuaikan atribut dengan nama dari nilai-nilai yang perlu dimasukkan ke db
    $brand_skincare = $_POST['brand_skincare'];
    $jenis_skincare = $_POST['jenis_skincare'];
    $harga = $_POST['harga'];
    $recommendation_skincare = $_POST['recommendation_skincare'];
    $tanggal_pembelian = $_POST['tanggal_pembelian'];
    $jam_pembelian = $_POST['jam_pembelian'];

    $sql = "INSERT INTO list (brand_skincare, jenis_skincare, harga, recommendation_skincare, tanggal_pembelian, jam_pembelian VALUES (?, ?, ?)";
    $row = $koneksi->execute_query($sql,[$brand_skincare, $jenis_skincare, $harga, $recommendation_skincare, $tanggal_pembelian, $jam_pembelian]);

    //bila berhasil, $row akan bernilai true
    if ($row) {
        header("location:list.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <div class = "form-item">
            <label>Brand Skincare</label><br>
            <input type="text"name="brand_skincare" id="brand_skincare"><br>
            <label>Jenis Skincare</label><br>
            <input type="text"name="jenis_skincare" id="jenis_skincare"><br>
            <label>Harga</label><br>
            <input type="text"name="harga" id="harga"><br>
            <label>Recommendation Skincare</label><br>  
            <input type="text"name="recommendation_skincare" id="recommendation_skincare">
            <label>Tanggal Pembelian</label><br>
            <input type="text"name="tanggal_pembelian" id="tanggal_pembelian"><br>
            <label>Jam Pembelian</label><br>
            <input type="text"name="jam_pembelian" id="jam_pembelian"><br>

            <button id="login-btn">Submit</button>
            <button><a href="list.php">Back</a></button>
        </div>
    </form>
</body>
</html>