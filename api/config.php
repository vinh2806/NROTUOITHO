<?php
	$apikey = 'AED6B5D44596C2163343B1ED1B8F32E3'; //API key, lấy từ website thesieutoc.net thay vào trong cặp dấu ''
	// database Mysql config
	$local_db = "127.0.0.1";
	$user_db = "root";
	$pass_db = "";
	$name_db = "nro";
	# đừng đụng vào 
  $conn = new mysqli($local_db, $user_db, $pass_db, $name_db);
  $conn->set_charset("utf8");
    
?>
