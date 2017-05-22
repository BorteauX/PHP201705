<?php
$a = array(1,2,3,4);
$b[]=$a;
$b[]=array(2,2,2);
echo count($b[2]);