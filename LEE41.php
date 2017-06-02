<?php
include 'sql2.php';

$pdo = new pdo($dsn,$user,$passwd,$opt);
$sql = "insert into travel (tnumber,tname,tsystem,tmanager) values(?,?,?,?)";
 


$json = file_get_contents('http://data.coa.gov.tw/Service/OpenData/DataFileService.aspx?UnitId=102');

$root = json_decode($json);

foreach ($root as $row){
    $tnumber = $row ->number;
    $tname =  $row->name;
    $tsystem=$row->system;
    $tmanager =$row->manager;

    $pdo->prepare($sql)->execute([$tnumber,$tname,$tsystem,$tmanager]);
//    echo $tnumber.'<br>';
}


