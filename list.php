<!-- menampilkan data dari database ke tabel -->
<?php

require "koneksi.php";

// ambil data dari sini, nampilkannya di bawah
$sql = "SELECT * FROM list";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>list</title>
</head>
<body>
    <h1> Halaman list</h1>

    <a href= "list-tambah.php"> Tambah Data </a>
    <table>
        <thead>
            <th> No </th>
            <th> Brand Skincare </th>
            <th> Jenis Skincare </th>
            <th> Harga </th>
            <th> Recommendation Skincare </th>
            <th> Tanggal Pembelian </th>
            <th> Jam Pembelian </th>
            <th> Aksi </th> 

        </thead>
        <tbody>
             foreach dengan sintaks alternatif
            <?php $no = 0; foreach ($rows as $row) : ?>
                <tr>
                    <td><?='++$no'?></td>
                    ...
                    <td>
                        <a href = "list-edit.php?id=<?=$row['id']?>" > Edit </a>
                        <a href = "list-hapus.php?id=<?=$row['id']?>" > Hapus </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table> 
</body>
</html>