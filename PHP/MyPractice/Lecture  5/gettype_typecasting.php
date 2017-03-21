<?php

$foo = 2.5; //$foo is a float
$bar =(int) $foo+1; // $bar is an int (3)


echo '$bar = '.$bar. ', type: ' .gettype($bar);
//outputs: $bar=3, type:integer

echo '<br>$foo = ' . $foo . ', type: ' .gettype($foo);
//outputs: $foo= 2.5, type: double

?>