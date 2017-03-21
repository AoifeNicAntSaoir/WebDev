<?PHP
   
    $initial = (int)$_POST['txtinitial'];
    $final = (int)$_POST['txtfinal'];
    $add = (int)$_POST['txtadd'];

    echo("<table border='1'>");
    echo("<tr><th colspan='2'>Times Table </th></tr>");
    for($initial; $initial <= $final; $initial++) {
        $answer = $initial + $add;
    echo("<tr><td>");
        print $initial . " added by " . $add . " = " . "</td>" ."<td>" .$answer . "</td></tr>";
    }
    echo("</table>");


?>
