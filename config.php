<?php
	$conn = mysqli_connect('localhost', 'root', '', 'pengaduan_dan_aspirasi');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>