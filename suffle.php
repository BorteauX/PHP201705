<?php
$poker = range(0,51);
shuffle($poker);
foreach($poker as $card){
    echo $card.'<br>';
}
echo '<hr>';

//發四個玩家

foreach ($poker as $i => $value) {
    $player[$i % 4][(int)($i / 4)] = $value;

}
?>

<table border="1" width="100%">
    <?php
        foreach($player as $value){

            echo '<tr>';
            foreach ($sb as $card){
                echo "<td>{$card}</td>";
            }
            echo '</tr>';
        }

    ?>

</table>
