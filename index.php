<?php 
include "koneksi.php";
include "Function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data penjualan</title>
</head>
<body>
    <table border="1">
        <caption>
            Data Stok Barang
            <form action="" method="get">
                <select name="Filter">
                    <option value="Fashion">Fashion</option>
                    <option value="Food">Food</option>
                    <option value="Medicine">Medicine</option>
                </select>
                <input type="submit" value="Filter" />
            </form>
        </caption>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
        </tr>
        <?php
        $query = "SELECT * FROM barang where kategori='$_GET[Filter]'";
        $result = $mysqli->query($query);
        $no=0; 
        while($row = $result->fetch_assoc()) {
            $no++;
?>
            <tr>
            <td><?= $no;?></td>
            <td><?= $row['nama_barang'];?></td>
            <td><?= FormatRupiah($row['harga']);?></td>
            <td><?= $row['stok'];?></td>
            <td><?= $row['kategori'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>