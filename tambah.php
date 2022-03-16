<h1>Form Tambah Data</h1>

<form method="POST">
    NIM : <input type="text" name="nim" required><br>
    NAMA : <input type="text" name="nama"><br>
    KELAS : <input type="text" name="kelas"><br>
    <input type="submit" value="Simpan">
</form>

<?php
if(isset($_POST['nim']) and !empty($_POST['nim'])) {
    include('koneksi.php');
    $sql = "insert into mahasiswa(nim, nama, kelas) values('" .
      $_POST['nim'] . "','" . $_POST['nama'] . "','" . $_POST['kelas'] . "')";
    $result = pg_affected_rows(pg_query($sql));
    if($result == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Data telah tersimpan");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}
?>