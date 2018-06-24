
<?php

if(isset($_POST['edit'])){
include ("koneksi.php");


$id_pas=$_POST['id_pas'];
$f=$_POST['pass'];
$g=$_POST['pass2'];

if($_POST['pass']==$_POST['pass2']){
$update=mysql_query("UPDATE pasien SET password='$f' WHERE id_pas='$id_pas'") ;
 header("location: as_pasien.php");
  } else{
echo "gagal";


  } 


}
?>