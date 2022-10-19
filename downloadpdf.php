<?php
header("Content-Type: application/octet-stream"); 
$file = 'http://unicornbilisim.com/gensis/wp-content/plugins/configurator-eklentisi/pdf/yazdir?urunler='.$_GET['pids'];
header("Content-Disposition: attachment; filename=" . urlencode('Ürünler.pdf'));    
header("Content-Type: application/download"); 
header("Content-Description: File Transfer");             
header("Content-Length: " . filesize($file)); 
flush(); 
$fp = fopen($file, "r"); 
while (!feof($fp)) { 
    echo fread($fp, 65536); 
    flush();
}  
fclose($fp);    
?>