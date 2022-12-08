<link rel="stylesheet" href="readstyle.css">

<table border="3" style="border-collapse: collapse ;border-color:pink">
<?php
$fp = fopen('./data/data.txt', 'r');   
echo "<tr>\n";
echo "<th>Date</th><th>Food</th><th>Weight</th>";
echo "<th>Walking</th><th>Condition</th><th>Comment</th>\n";
echo "</tr>\n";
while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($date,$food,$weight,$walk,$cdt,$cmt) = explode(",",$line);

        echo "<tr>\n";
        echo "<td>$date</td><td>$food</td><td>$weight</td>";
        echo "<td>$walk</td><td>$cdt</td><td>$cmt</td>\n";
        echo "</tr>\n";
    }
}
fclose($fp);
?>
</table>












