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
				<li><a href="layanan.php">Layanan & Fasilitas</a></li>
				<li class= "current"><a href="login_pasien.php">Cek Hasil Lab Online</a></li>
			</ul>

		</nav>
	</div>
	</header>


			<table width="120%">
				<td width="27%">
				</td>
				<td width="30%">
					<br><br><br>
				<div>
	

				
				<br>
				<a href="input_pasien.php"><h2>Input Data Pasien</h2></a>
			
				<a href="search.php"><h2>Cari Data Pasien</h2></a>
			
				<a href="upload.php"><h2>Upload Hasil Lab</h2></a>
			
                <a href="hasil_lab.php"><h2>Dokumentasi Hasil Lab</h2></a>
                <br><br>
				<br><br>
				
				
				<a href="as_admin.php?page=logout"><h2>LOGOUT</h2></a>
				<br>
				</br>
				</div>	
			</td>
			<td width="45%">
			</td>
	
</table>

<style type="text/css">
table td div a{
	position: center;
}
table td div{
	position: center;
	text-align: center;
	border-radius: 15px;
	background: orange;
	
}
table td div a h2{

width:300px;
background:#ffffff;
color: #222;
text-align: center;
border: 2px solid yellow;
padding: 10px;
border-radius: 15px;
position:center;
margin-left: 55px;
}
table td div a h2:hover{
color: yellow;
background: grey;
}
</style>
<?php
	if(isset($_GET["page"])){
		$page = $_GET["page"];
		if(	$page=="logout"){
			session_destroy();
			header("location: login_pasien.php");
		}
	}
?>

   
   <footer>
		<p>Web by Rizkhita, Copyright &copy;2017</p>
	</footer>
 
  </body>
</html>
<?php } else{
header("location: login_pasien.php");	
}?>