<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
  session_start();
if(isset($_SESSION["id_pas"])){
	$user=$_SESSION["id_pas"];
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
			
		
				<?php
echo "<center>";

echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'border='orange'>


<td>Jenis Pemeriksaan</td>

<td>Hasil Pemeriksaan</td>

<td>Hasil Tanggal Pemeriksaan</td>
</tr>";  

   	//$nomor=0;
    
    $query_mysql = mysql_query("SELECT * FROM endokrin WHERE id_pas='$user' ORDER BY no ASC ")or die(mysql_error());
    
    $query_mysql2 = mysql_query("SELECT * FROM goldar WHERE id_pas='$user' ")or die(mysql_error());
    if($data = mysql_fetch_array($query_mysql)){
    //$nomor++;	
 
 $no= $data['no'];

?>

<tr>
<!-- <td><?php echo $nomor?></td>
 -->
<td><?php echo$data['kode_periksa']?></td>

<td><a href="view2.php?no=<?php echo $no?>"><button>Cetak</button></a>&nbsp;<a href="hapus_endokrin.php?no=<?php echo $no?>" onclick="javascript:return confirm('jika anda menghapus file ini, anda tidak adapat lagi mengunduhnya.')"><button>Hapus</button></a>

</td>
<td><?php echo$data['tgl']?></td>
</tr>
<?php
}
    if($data = mysql_fetch_array($query_mysql2)){
    //$nomor++;	
 
 $no= $data['no'];

?>

<tr>
<!-- <td><?php echo $nomor?></td>
 -->
<td><?php echo$data['kode_periksa']?></td>

<td><a href="view3.php?no=<?php echo $no?>"><button>Cetak</button></a>&nbsp;<a href="hapus_goldar.php?no=<?php echo $no?>" onclick="javascript:return confirm('jika anda menghapus file ini, anda tidak adapat lagi mengunduhnya.')"><button>Hapus</button></a>

</td>
<td><?php echo$data['tgl']?></td>
</tr>
<?php
}
echo "</table>";
?>
			
			
            
			<br>
			<!-- <button><a href="gantiuspas.php"> GANTI USERNAME & PASSWORD </a></button> -->
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