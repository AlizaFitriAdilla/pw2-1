<h1>Form Tambah Data</h1>

<form method="post">
    NIM : <input type="text" name="nim" required><br>
    NAMA : <input type="text" name="nama" required><br>
    KELAS : <input type="text" name="kelas"><br>
    <input type="submit" value="Simpan">
</form>

<?php
if(isset($_POST['nim']) and !empty($_POST['nim'])) {    
  include('koneksi.php');
  $sql = "insert into mahasiswa(nim, nama, kelas) values('" .
      $_POST['nim'] . "','" . $_POST['nama'] . "','" . $_POST['kelas'] . "')";
  $result = pg_affected_rows(pg_query($sql));
  echo "data tersimpan $result baris";
  if($result == 1) {
      header('Location: index.php');
  }
}
?>