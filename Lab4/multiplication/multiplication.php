<?php
function multTable($x, $y) {
        $z = $x + $y;
        return $z;
}

function topRow() {
        echo "<th> X </th>";
        for ($i = 1; $i <= 100; $i++){
                echo "<th>" . $i . "</th>";
        }

}

echo topRow();
?>


for ($j = 1; $j <= 100; $j++){
        echo "<tr>";
        echo "<td> 1 </td>";
        for ($i = 1; $i <= 100; $i++){

                echo "<td>" . $i . "</td>";


        }
        echo "</tr>"

}
