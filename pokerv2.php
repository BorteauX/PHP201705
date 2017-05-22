<?php
<?php
$poker = array();
for ($i = 0; $i < 51; $i++) {


    //檢查機制

    do {
        $temp = rand(0, 51);

        $isrepeat = false;
        for ($j = 0; $j < $i; $j++) {
            if ($poker[$j] == $temp) {
                //重複了

                $isrepeat = true;
                break;
            }

        }
    } while ($isrepeat);

    $poker[$i] = $temp;



    echo $poker[$i] . '<br>';
}