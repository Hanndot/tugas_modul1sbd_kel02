<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Add Minuman</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />
    <h2>Kelompok XX</h2>
    <form action="addMinuman.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama Minuman</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        // include database connection file
        include_once("config.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO
minuman(nama_minuman,harga_minuman) VALUES('$nama','$harga')");
        // Show message when user added
        echo "Berhasil menambahkan minuman <a
href='index.php'>dashboard</a>";
    }
    ?>
</body>

</html>