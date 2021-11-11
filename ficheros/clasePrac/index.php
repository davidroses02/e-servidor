<?php


    $filename = 'poerma.txt';
    if (file_exists($filename))   {
        $count = file('poerma.txt');
        $count[0] ++;
        $fp = fopen("poerma.txt", "w");
        fputs ($fp, "$count[0]");
        fclose ($fp);
        echo $count[0];
    }
    else {
        $fh = fopen("poerma.txt", "w");
        if($fh==false) die("unable to create file");
        fputs ($fh, 1);
        fclose ($fh);
        $count = file('poerma.txt');
        echo $count[0];
    }
?>