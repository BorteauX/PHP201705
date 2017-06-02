<meta charset="UTF-8">

<?php
include 'sql3.php';
$pdo = new pdo($dsn,$user,$passwd,$opt);
$sql = "insert into tw_train(stationname,stationename,addr,tel)values(?,?,?,?)";


$json = file_get_contents('http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json');
$result = mb_convert_encoding($json,"utf-8","big5");
$root = json_decode($result);

foreach ($root as $row){
    $stationname = $row->Station_Name;
    $stationename = $row->Station_EName;
    $addr=$row->住址;
    $tel = $row -> 電話;

    $pdo->prepare($sql)->execute([$stationname,$stationename,$addr,$tel]);

}

//http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json