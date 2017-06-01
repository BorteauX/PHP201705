<?php
include 'sql3.php';
$pdo = new pdo($dsn,$user,$passwd,$opt);
$sql = "insert into tw_train(twStation_Name,twStation_EName,addr,tel)";


$json = file_get_contents('http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json');

$root = csv($json);
echo var_dump($root);
foreach ($root as $row){
    $twStation_Name = $row->Station_Name;
    $twStation_EName = $row->Station_EName;
    $addr=$row->住址;
    $tel = $row -> 電話;

    $pdo->prepare($sql)->execute([$twStation_Name,$twStation_EName,$addr,$tel]);

}