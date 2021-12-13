
<?php
$n=rand(0,500);
print ("N = " . $n ."<p> ");
for ($i = 0; $i < (sqrt($n)+1); $i++) {
    for ($j = 0; $j < (sqrt($n)+1); $j++) {
        if (($i*$i + $j*$j) == $n) echo " a =  $i;  b =  $j;  <p>";
    }
}