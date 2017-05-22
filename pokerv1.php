<?php
$poker =array();
for($i=0;$i<51;$i++){
    $temp=rand(0,51);

    //檢查機制
    $isrepeat = false;
    for($j=0; $j<$i ; $j++){
        if($poker[$j]==$temp){
            //重複了

            $isrepeat = true;
            break;
        }

    }

    if($isrepeat){
        $i--;
        continue;
    }else{
        $poker[]=$temp;
    }


    echo $poker[$i].'<br>';
}