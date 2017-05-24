<?php
$sayYa();
$v = fx(4);
sayYa('brad','ya');
sayYa('brad','Hi');
sayYa('brad','hello');
sayYa('brad','suck');

function fx($x){
    $ret = 2*$x+1;
    return $ret;
}



function sayYa($who,$pre = 'hello'){
    echo "{pre},{$who}<br>";
}

function lottery(){
$ball=range(1,49);
shuffle($ball);
for($i=0;$i<6;$i++){

}

};