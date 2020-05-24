<?php
/* 
My new application, same as Visual studio format for commenting
*/
$file = "C:\Users\drabi\Desktop\RT\Sample.txt";
$pointer = fopen($file,'r+');
$reader = fread($pointer,filesize($file));
echo $reader;
//fwrite($pointer,"next line successfully added".PHP_EOL);
fclose($pointer);
?>
