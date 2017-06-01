<?php
//$conn = @mysqli_connect('127.0.0.1','root','root','iii')
//    or die('error');
//if ($conn) echo 'ok';


$db = @new mysqli('127.0.0.1','root','root','iii')
or die('error');
$sql='select * from member';
$result = $db->query($sql);


while ($row = $result->fetch_object()){
    echo "{$row->id}:{$row->account}:{$row->passwd}<br>";
}