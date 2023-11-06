<?php
//declare(strict_types = 1);

 function addNT($a, $b)
 {
    echo 'addNT<br>';
    echo $a . ' + ' . $b . ' = ' . ($a+$b) . '<br>';
 }

 function addTF(float $a, float $b)
 {
    echo 'addTF<br>';
    echo $a . ' + ' . $b . ' = ' . ($a+$b) . '<br>';
 }

 addNT(5,10);
 addNT(5,'15');
 echo '-----------<br>';
 addTF(3, 9);
 addTF(3,'11');
