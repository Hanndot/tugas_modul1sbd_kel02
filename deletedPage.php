<?php
// Create database connection using config file
include_once("config.php");
// Fetch data
$makanan = mysqli_query($mysqli, "SELECT * FROM makanan WHERE
is_delete=1 ORDER BY id_makanan DESC");
$minuman = mysqli_query($mysqli, "SELECT * FROM minuman WHERE
is_delete=1 ORDER BY id_minuman DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Deleted Items</title>
</head>

<body>
    <h1>Deleted Items</h1>
    <h3>Tabel Makanan</h3>
    <table width='80%' border=1>
        <tr>
            <th>Nama Makanan</th>
            <th>Harga
                Makanan</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($item = mysqli_fetch_array($makanan)) {
            echo "<tr>";
            echo "<td>" . $item['nama_makanan'] . "</td>";
            echo "<td>" . $item['harga_makanan'] . "</td>";
            echo "<td><a href='restoreMakanan.php?id=$item[id_makanan]'>Restore</a>";
        }
        ?>
    </table>
    <h3>Tabel Minuman</h3>
    <table width='80%' border=1>
        <tr>
            <th>Nama Minuman</th>
            <th>Harga
                Minuman</th>
                <th>Aksi</th>
        </tr>
        <?php
        while ($item = mysqli_fetch_array($minuman)) {
            echo "<tr>";
            echo "<td>" . $item['nama_minuman'] . "</td>";
            echo "<td>" . $item['harga_minuman'] . "</td>";
            echo "<td><a href='restoreMinuman.php?id=$item[id_minuman]'>Restore</a>";
        }
        ?>
    </table>
    
    <p></p>
    <button onclick="location.href='index.php'" type="button">
         Back to Homepage</button>
    
</body>

</html>