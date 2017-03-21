<?php
// demonstrates converting to numbers
// can only * / + numeric values, php quietly converts variables to the right datatype if it can
// the . operator expects strings always and has the same precedence as  + -  

$var = 3;
echo "Result: " . $var + 3;
     Result:3 + 3       3


$var = 3;
echo "<br> Result: " . ($var + 3);
        3+3 = 6
        Result:6


$var = 3;
echo "<br>";
echo "4Result: " . $var;  
      4Result:3

$var = 3;
echo "<br>";
echo "4Result: " . $var + 3;
       4result:3
	   4result3 + 3
	   4+3 = 
	   7

$var = 3;
echo "<br>";
echo "4Result: " . ($var + 3);  
      3 + 3 =6
	  4result:6
      

$foo = 2.5; 
$bar = (int)$foo+1; 

echo '<br> $bar = ' . $bar . ', type: ' . gettype($bar);


echo '<br> $foo = ' . $foo . ', type: ' . gettype($foo);
       




echo '<br> <br> demonstrates converting to numbers';

$stringnumber = '3';
$num = 5; 
echo '<br>' . $stringnumber * $num;

$stringnumber = '15a4';
echo '<br>' .$stringnumber * $num;

$stringnumber  = 'aa';
echo '<br>' .$stringnumber * $num;



$stringnumber = '3';
$num = 5;
echo '<br> <br>' . $stringnumber / $num;

$stringnumber = '15a4';
echo '<br>' .$stringnumber / $num;

$stringnumber  = 'aa';
echo '<br>' .$stringnumber / $num;




echo '<br>concat<br>';
$stringnumber = '3';
$num = 5;
echo '<br>' . $stringnumber . $num;



echo '<br><br>Adding, the + operator in php automatically converts string into numbers, which explains why your code carried out arimethic instead of concatenation<br>';

$stringnumber = '3';
$num = 5;
echo $stringnumber + $num . '<br>';

$stringnumber = '15a4';
echo $stringnumber + $num . '<br>';

$stringnumber  = 'aa';
echo $stringnumber + $num . '<br>';



?> 