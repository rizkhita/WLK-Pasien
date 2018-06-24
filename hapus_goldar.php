<?php 
include 'koneksi.php';
$no= $_GET['no'];

mysql_query("DELETE FROM goldar WHERE no='$no'")or die(mysql_error());
 header("location:as_pasien.php?pesan=hapus_goldar");


?>