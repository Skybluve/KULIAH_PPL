<?php
function operasi($a,$b){
    $a = 9;
    $b = 2;
    
    echo "\nNilai A adalah ", ($a);
    echo "\nNilai B adalah ", ($b);
    echo "\nA pangkat B Adalah ",($a**$b);
    echo "\nA Modulus B adalah ", ($a % $b);
    echo "\nA Sama Dengan B adalah ",($a == $b);
    echo "\nA Lebih Besar B adalah ",($a >= $b);
    echo "\nA Lebih Kecil B adalah ",($a <= $b);
    echo "\nA Tidak Sama B adalah ",($a != $b);
}
operasi(9,2);
?>