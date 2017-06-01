<?php
$fp = fopen('./LEE10_01.php','r');
while ($line = fgets($fp)) {
    $len = strlen("$line");
    echo "{$len}{$line}<br>";
}
fclose($fp);