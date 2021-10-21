<?php 

function Fibonacci($num){
    if ($num == 0 or $num == 1)
        return 1;       
    else
        return (Fibonacci($num-1) + 
                Fibonacci($num-2));
}
  
$num = 10;
for ($i = 0; $i < $num; $i++){  
    echo Fibonacci($i).'<br>';
}

?>