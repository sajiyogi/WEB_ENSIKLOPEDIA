<?php
	$koneksi = mysqli_connect("localhost","root","","tb_pw");
	
	if(!$koneksi){
		echo "Database connection faild...";
	}

?>