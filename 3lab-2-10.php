<?php
echo "<table border='1'>";
$count = 1;
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        if ($count % 2 == 0) {
            echo "<td style='color:red'>" . $count . "</td>";
        } else {
            echo "<td style='color:black'>" . $count . "</td>";
        }
        $count++;
    }
    echo "</tr>";
}
echo "</table>";
