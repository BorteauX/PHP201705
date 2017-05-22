<?php
$a[0] = 12;
echo gettype($a);
var_dump($a);
echo count($a);  //count計算陣列長度
echo '<hr>';


$b[] = 123;
$b[] = 12.3;
$b[] = true;
var_dump($b);
echo count($b);  //count計算陣列長度
echo '<hr>';


$Larry['age'] = 29;
$Larry['weight'] = 70;
$Larry['gender'] = true;
var_dump($Larry);
echo count($Larry);  //count計算陣列長度

echo '<hr>';

$c = array(1, brad, 0.4, 'gender' => true);
echo count($c);      //count計算陣列長度
var_dump($c);