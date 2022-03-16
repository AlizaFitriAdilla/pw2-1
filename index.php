<?php
  include('koneksi.php');
?>

<h3>Aplikasi Mahasiswa</h3>

<br>
<a href="tambah.php">Tambah</a>
<br>

<table border="1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KELAS</th>
        </tr>
    </thead>
    <tbody>
        <?php
          
$sql = "select * from mahasiswa";
$result = pg_query($sql);

// if($result) {
//     echo "Datanya ada";
// } else {
//     echo "Datanya tidak ada";
// }
while($row = pg_fetch_object($result)):
        ?>
        <tr>
            <td><?= $row->nim ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->kelas ?></td>
            <td>
<?php
echo '<a href="hapus.php?nim=' . $row->nim . '">Hapus</a></td>';
echo '<td><a href="ubah.php?nim=' . $row->nim . '">Ubah</a>';
?>
            </td>
        </tr>
<?php endwhile; ?>
    </tbody>
</table>