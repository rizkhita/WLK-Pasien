<?php ob_start();


?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>

<p><img style="margin-left:15px;width:100px;height:auto;" src="img/logo.png"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AL MUHTAR CLINICAL LABORATORY</b></p>
<h5 style="text-align:center;">Alamat : Jl. Padjagalan No.10, Banjaran, Bandung, Jawa Barat (40379).<br>Telp/Fax : (022) 5946190. Email : kikirizkhita@gmail.com</h5>
<h6>Penanggung Jawab : Dr. Rizhita Habib Muhtar Sp.PD-KEMD</h6>
<hr width="100%" color="black" align="center">
<br>
<?php
// Load file koneksi.php
include_once ('koneksi.php');
 

$no = $_GET['no'];


$query =mysql_query( "SELECT * FROM goldar  WHERE  no='$no'  ");
$data= mysql_fetch_array($query);

$id=$data['id_pas'];
$query2=mysql_query( "SELECT nama,jk,ttl,born,no_tlp,alamat FROM pasien WHERE  id_pas='$id'  ");

// Ambil jumlah data dari hasil eksekusi $sql
 // Ambil semua data dari hasil eksekusi $sql
$d= mysql_fetch_array($query2);
echo "<table style='width:100%;margin-left:15px;margin-right:20px;'>";
echo "<tr>";
echo "<td>Nama</td><td>:&nbsp;" .$d['nama']."</td>";
echo "<td>";echo "</td>";
echo "<td>ID Registrasi</td><td>:&nbsp;" .$id."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Jenis Kelamin</td><td>:&nbsp;" .$d['jk']."</td>";
//echo "<td>Tanggal Lahir</td><td>:&nbsp;".$d['ttl'].",&nbsp;" .$d['born']."</td>";
echo "<td>";echo "</td>";
echo "<td>Tanggal Periksa</td><td>:&nbsp;" .$data['tgl']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Tanggal Lahir</td><td>:&nbsp;".$d['ttl'].",&nbsp;" .$d['born']."</td>";
echo "<td>";echo "</td>";
echo "<td>Pemeriksaan</td><td>:&nbsp;" .$data['kode_periksa']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Alamat</td><td>:&nbsp;" .$d['alamat']."</td>";
echo "<td>";echo "</td>";
echo "<td>Nama Dokter</td><td>:&nbsp;" .$data['dok']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Nomor Tlp</td><td>:&nbsp;" .$d['no_tlp']."</td>";
echo "<td>";echo "</td>";
echo "<td>";echo "</td>";echo "<td>";echo "</td>";
echo "</tr>";

echo "</table>";



?>
<br><br><br><br>
<table border="1" style="width:200%;margin:auto;">
<tr>
  
  <th style='text-align:center;'>No.</th>
  <th style='text-align:center;'>Golongan darah</th>
  <th style='text-align:center;'>Rhesus</th>
</tr>

<style type="text/css">
table th{
  background: #7386D5;
}
table tr td{
  width:10px;
}
</style>
<?php
      $i=0;
      for ($i=0; $i <1 ; $i++) { 
        # code...
       
        echo "<tr>";
        echo "<td style='width:40px;text-align:center;'>".$i."</td>";
        echo "<td style='text-align:center;'>".$data['golongan']."</td>";
        echo "<td style='text-align:center;'>".$data['rhesus']."</td>";    
        echo "</tr>";
       
}
    $i++;
    

/*$query2=mysql_query( "SELECT pasien.nama FROM pasien inner join goldar on goldar.id_pas=pasien.id_pas WHERE  no='$no'  ");
$data= mysql_fetch_array($query2);
// Ambil jumlah data dari hasil eksekusi $sql
 // Ambil semua data dari hasil eksekusi $sql

        echo " nama :".$data['nama']."";*/
  
?>
</table>
<br><br><br><br><br><br><br>
<h5 style="text-align:right;margin-right:50px;">Pemeriksa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
<h5 style="text-align:right;margin-right:50px;"><img style="width:100px;height:auto;" src="img/logo.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
<!-- <img style="margin-right:15px;width:100px;height:auto;" src="img/logo.png"> -->
<h6 style="text-align:right;margin-right:50px;"> Dr. Rizhita Habib Muhtar Sp.PD-KEMD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
</body>
</html>
<?php

$html = ob_get_contents();
ob_end_clean();

require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');

$pdf->WriteHTML($html);
$pdf->Output('Hasil Pemeriksaan Golongan darah.pdf', 'D');
?>