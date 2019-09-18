	<?php
		$data_user_name  = $_POST['data_user_name'];
		$data_user_phone = $_POST['data_user_phone'];
		$data_article_title = $_POST['data_article_title'];
		$data_article_description = $_POST['data_article_description'];
		$data_article_price = $_POST['data_article_price'];
		$id_product = $_POST['id_product'];
		mkdir($id_product, 0700);
        if(isset($data_user_name) && isset($data_user_phone) && isset($data_article_title) && isset($data_article_description) && isset($data_article_price) && isset($id_product)){
            $myfile = fopen($id_product."/".$id_product.".txt", "w");
            $txt = "- Tên người dùng : ".$data_user_name."\n"; 
            fwrite($myfile, $txt);
            $txt = "- Số điện thoại : ".$data_user_phone."\n"; 
            fwrite($myfile, $txt);
            $txt = "- Giá : ".$data_article_price."\n"; 
            fwrite($myfile, $txt);
            $txt = "- Tiêu đề : ".$data_article_title."\n"; 
            fwrite($myfile, $txt);
            $txt = "- Mô tả : ".$data_article_description."\n"; 

            fwrite($myfile, $txt);
            fclose($myfile);
        }
        else
        {
        	echo "Không có chuỗi json trả về";
        }
     ?>

