<?php
include 'sql.php';

$pdo = new pdo($dsn,$user,$passwd,$opt);

$account = 'mark';
$passwd ='5555';
$realname='Tony Mark';

$sql="insert into member(account,passwd,realname)VALUES (?,?,?)";
$rs = $pdo ->query($sql);



$stmt=$pdo->prepare('sql');
$stmt->execute('ten','556','ten ten');
//while($row = $rs->fetchObject()){
//    echo "{$row->id}:{$row->account}";
//}
$pdo->prepare('sql')->execute([$account],[$passwd],[$realname]);