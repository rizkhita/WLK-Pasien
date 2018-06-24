<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: as_admin.php");
}
?>
 
<!DOCTYPE html>
<html>
  <head>
   	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width">
	<meta name= "description" content ="Selamat Datang di Web Al-Muhtar">
	<meta name= "keywords" content= "pokoknya mah visi misi singkatnya weh">
	<meta name= "author" content="Rizkhita Dong"> 
	<title>Laboratorium Klinik Al-Muhtar Banjaran | Cek Hasil Lab Online </title>
	<link rel="stylesheet"type="text/css" href="badanweb.css">

		
  
  </head>	
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
				<li><a href="tentanglab.php">Tentang Al-Muhtar</a></li>
				<li><a href="layanan.html">Layanan & Fasilitas</a></li>
				<li class= "current"><a href="login_pasien.php">Cek Hasil Lab Online</a></li>
			</ul>

		</nav>
	</div>
	</header>

	<div class="container">
		<section id="main">
				
				
<?php


$sql ="SELECT * FROM documents";

$res=mysql_query($sql);

?>


	<br>
	<br>
	<a href="upload.php"><strong>Upload Dokumen Baru</strong></a>
    <br>
	<br>
    <table border="1">
    	<tr align="center">
        	<th>ID Pasien</th>
            <th>Nama File</th>
            <th>Download</th>
        </tr>
       
	<?php

	while ($row = mysql_fetch_array($res)){

		$id =$row['id_pas'];
		$name=$row['name'];
		$path=$row['path'];
		echo " <tr align='center'>";
		echo "<td>$id</td>";
		echo "<td>$name</td>";
		echo "<td><a href='download.php?dow=$path'> <img src='down.png'> </a></td>";
		echo "</tr>";
	}

	?>
    
    </table>
				<br></br>
				<br></br>
				<li><a href="as_admin.php">Back</a></li>

		</section>
   </div>



   
	<footer>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="foot2.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="topbrand.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="proline.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="inodia.png" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="prosistem.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="RRR.png"> 
		</p>
		
	</footer>
</body>
</html>