<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
 session_start();
if(isset($_SESSION["nama_admin"])){

?>
 
<!DOCTYPE html>
<html>
  <head>
   	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width">
	<meta name= "description" content ="Selamat Datang di Web Prodia">
	<meta name= "keywords" content= "pokoknya mah visi misi singkatnya weh">
	<meta name= "author" content="Rizkhita Dong"> 
	<title>Laboratorium Klinik Prodia Banjaran | Cek Hasil Lab Online </title>
	<link rel="stylesheet"type="text/css" href="badanweb.css">

		
  
  </head>	
  <body>

  	<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><img src="prodia.png"></br>
				<span class="highlight"></h1></span>
	</div>
		<nav>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="tentanglab.php">Tentang Prodia</a></li>
				<li><a href="layanan.php">Layanan & Fasilitas</a></li>
				<li class= "current"><a href="login_pasien.php">Cek Hasil Lab Online</a></li>
			</ul>

		</nav>
	</div>
	</header>

	<div class="container">
		<section id="main">
				
<?php

$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from pasien where nama like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<br></br>";
echo "<h2> Hasil Pencarian</h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'border='orange'>
<td>Id Pasien</td>
<td>Nama</td>
<td>Alamat</td>
<td>Tempat, Tanggal Lahir</td>
<td>Jenis Kelamin</td>
<td>Nomor Telepon</td>
<td>USERNAME</td>
<td>PASSWORD </td>


</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['id_pas']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['ttl']."</td>
<td>".$data['jk']."</td>
<td>".$data['no_tlp']."</td>
<td>".$data['username']."</td>
<td>".$data['password']."</td>
</tr>";
}
echo "</table>";
?>
				<br></br>
				<br></br>
				<li><a href="search.php">Back</a></li>
				<br></br>
				<br></br>
				<br></br>
		</section>
   </div>

	<footer>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="foot2.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="topbrand.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="proline.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="inodia.png" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="prosistem.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="RRR.png"> 
		</p>
		
	</footer>
</body>
</html>
<?php } else{
header("location: login_pasien.php");	
}?>