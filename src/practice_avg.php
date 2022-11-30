<?php
$marks = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$sum = 0;
for ($i = 0; $i < count($marks); $i++) {
    $sum += $marks[$i];
}
$avg = $sum / count($marks);
echo $avg;
?>