<?php 
	$data_img = $_POST['data_img'];
	$id_product = $_POST['id_product'];
	$url = $data_img;
	$ch = curl_init($url);
	$my_save_dir = $id_product."/";
	$filename = ".jpg";
	echo $filename;
	$complete_save = $my_save_dir.md5(rand(0,1000)).$filename;

	$fp = fopen($complete_save, 'wb');
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
?>