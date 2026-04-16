<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah_mahasiswa.php">Tambah Data </a>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nim</th>
            <th>email</th>
            <th>nomor</th>
            <th>jurusan</th>
            <th>aksi</th>
        </tr>
    <?php white($row=$result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['nim'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['nomor'];?></td>
            <td><?php echo $row['jurusan'];?></td>

            <td>
                <a href="edit_mahasiswa.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="hapus_mahasiswa.php?id=<?php echo $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</body>

</html>

<?php ?conn->close(); ?>