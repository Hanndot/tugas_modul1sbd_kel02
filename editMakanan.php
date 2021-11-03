<?php
// include database connection file
include_once("config.php");
// Check if form is submitted for data update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    // update data
    $result = mysqli_query($mysqli, "UPDATE makanan SET
nama_makanan='$nama',harga_makanan='$harga' WHERE id_makanan=$id");
    // Redirect to homepage to display updated data in list
    header("Location: index.php");
}
?>
<?php
// Display selected makanan based on id
// Getting id from url
$id = $_GET['id'];
// Fetch data based on id
$result = mysqli_query($mysqli, "SELECT * FROM makanan WHERE
id_makanan=$id");
while ($makanan = mysqli_fetch_array($result)) {
    $nama = $makanan['nama_makanan'];
    $harga = $makanan['harga_makanan'];
}
?>
<html>

<head>
    <title>Edit Makanan</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />
    <h2>Kelompok 02</h2>
    <form name="update_makanan" method="post" action="editMakanan.php">
        <table border="0">
            <tr>
                <td>Nama Makanan</td>
                <td><input type="text" name="nama" value=<?php echo
                                                            $nama; ?>></td>
            </tr>
            <tr>
                <td>Harga Makanan</td>
                <td><input type="text" name="harga" value=<?php echo
                                                            $harga; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo
                                                            $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>