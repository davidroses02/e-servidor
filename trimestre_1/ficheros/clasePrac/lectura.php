<?php 

$file = fopen("poerma.txt","r") or exit("unable to open file!");
/** 
 while (!feof($file)) {
     echo fgets($file) . "<br>";
    }
    */
    
$buffer = fread($file,filesize("poerma.txt"));
echo $buffer;
fclose($file);
    
?>