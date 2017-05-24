<table border="1" width="100%s">

    <?php


$col = 20;


    for ($i = 1; $i <= 100; $i++) {
        if($i%$col ==1){
            echo "<tr>";
        }

        echo "<td >{$i}</td >";


        if($i%$col ==0){
            echo "</tr>";
        }
    }



    ?>







</table>