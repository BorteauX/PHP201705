<?php
$fp = fopen('./yyy.php','w+');
fwrite($fp,"hello");
fclose($fp);