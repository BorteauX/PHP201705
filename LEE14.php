<?php
$data = file("Book1.csv");
?>

<table border="1" width="100%">
    <tr>
        <th>name</th>
        <th>f1</th>
        <th>f2</th>

    </tr>

    <?php
    foreach ($data as $line) {

        $fields = explode(',', $line);
        echo '<tr>';
        foreach ($fields as $field) {
            echo "<td>{$field}</td>";

        }
        echo '</tr>';
    }
    ?>


</table>
