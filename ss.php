<table border="1" width="100%">


    <?php
    $col=10;

    for($j = 1; $j <= $col; $j++) {
        echo "<tr></tr>";
        for ($i = 1; $i <= $col; $i++) {
            $r = $i*$j;
            echo "<td>{$r}</td>";
        }

    }
    ?>


</table>