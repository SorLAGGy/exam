<?php
$mark = array("iPhone", "Samsung Galaxy", "Nokia", "Samsung");
for ($tr=1; $tr<=$mark.Length; $tr++){
        echo '<tr>';
        for ($td=1; $td<=3; $td++){
            echo '<td>'. $tr*$td .'</td>';
        }
    echo '</tr>';
}

echo '</table>';

?>