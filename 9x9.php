<table width="100%" border="1">
    <tr>

        <?php
        for ($row = 0; $row < 2; $row++) {
            echo '<tr>';
            for ($j = 2; $j <= 5; $j++) {
                echo '<td>';
                $newj=$j+$row*4;

                for ($i = 1; $i <= 9; $i++) {
                    $r = $newj * $i;
                    echo "{$newj}x{$i}={$r}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';

        }

        ?>








</table>