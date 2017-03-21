<?php  //Aoife Sayers T00170881

$start = (double)$_GET['start'];
$finish = (double)$_GET['finish'];
$addby = (double)$_GET['addby'];

echo "<table border='1'>";
echo "<tr><th>";
echo "Times Table";
echo "</th></tr>";


for($start=(double)$_GET['start']; $start<=$finish; $start++)
{
echo "<tr><td>";
echo $start . " added by " . $addby . "=";
echo "</td><td>";
echo number_format($start+$addby);
echo "</td></tr>";
}

echo "</table>";

?>        