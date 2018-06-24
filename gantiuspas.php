<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
  session_start();
if(isset($_SESSION["id_pas"])){
	$user=$_SESSION["id_pas"];
?>

<?php

if(isset($_POST['edit'])){
include ("koneksi.php");


$id_pas=$_POST['id_pas'];
$g=$_POST['pass'];


if($_POST['pass']==$_POST['pass2']){
$update=mysql_query("UPDATE pasien SET password='$g' WHERE id_pas='$id_pas'") ;
 header("location: as_pasien.php");
  } else{
echo "gagal";


  } 


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
				<li><a href="layanan.php">Layanan & Fasilitas</a></li>
				<li class= "current"><a href="login_pasien.php">Cek Hasil Lab Online</a></li>
			</ul>

		</nav>
	</div>
	</header>

	<div class="container">
		<section id="main">
			<br><br><br><br>
			
		
<table width="90px">
	<td width="30px">
	</td>
<td width="30px">
<form action="gantiuspas.php" method="post" enctype="multipart/form-data">


<br>
Ganti Password 
<br>Password Baru :
		<input type="hidden" value="<?php echo $user; ?>"name="id_pas">
		<input type="password" name="pass">
<br>Konfirmasi Password :
	    <input type="password" name="pass2">
<br>	<input type="submit" name="edit" value="simpan">
<br>
</form>
</td>
<td width="30px">
	</td>
</table>
			
			
            
			<br>
			<button><a href="gantiuspas.php"> GANTI USERNAME & PASSWORD </a></button>
            <br>
            <button><a href="as_pasien.php?page=logout"> << LOGOUT </a></button>
            </br>

            <style type="text/css">
            table{
            	border : orange 4px solid;
            	color: black;
            	border-radius:15px ;
            	position: center;

            }
            
            br a{
            	background : orange;
            	color: black;
            	border-radius: 20px;
            	border: gray 2px solid;
            	position :center;
            }
            </style>
	      	<br></br>
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
		<?php
				if(isset($_GET['page'])){
				$page=$_GET['page'];
				if($page=="logout"){
					session_destroy();
					header("location: login_pasien.php");
				}
				}?>
<?php } else{
header("location: login_pasien.php");	
}?>