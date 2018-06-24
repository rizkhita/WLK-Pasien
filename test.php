<?php
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("lab3") or die (mysql_error());


class test extends PHPUnit_Framework_TestCase{
	function testID(){
		$sql = mysql_query("SELECT * FROM pasien where id_pas ='13'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['nama'];
		$content = $test_user;
		$this->assertEquals('wendii',$content);
	}
	
	function testAlamat(){
		$sql = mysql_query("SELECT * FROM pasien where  nama='wendii'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['id_pas'];
		$content = $test_user;
		$this->assertEquals('13',$content);
	}
}
?>