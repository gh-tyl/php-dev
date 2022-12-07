<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $students = [
        'Riku' => [21, 32, 45, 23, 45],
        'Lucas' => [23, 45, 67, 89, 90],
        'Tina' => [12, 34, 56, 78, 90],
        'Daniel' => [23, 45, 67, 89, 90],
        'Masa' => [12, 34, 56, 78, 90],
    ];
    ?>
    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Score 1</th>
                <th>Score 2</th>
                <th>Score 3</th>
                <th>Score 4</th>    
                <th>Score 5</th>
                <th>Avg</th>
                <th>Max</th>
                <th>Min</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($students as $student => $score) {
                echo '<tr>';
                echo '<td>' . $student . '</td>';
                foreach ($score as $s) {
                    echo '<td>' . $s . '</td>';
                }
                $sum = 0;
                $max = $score[0];
                $min = $score[0];
                foreach ($score as $s) {
                    $sum = $sum + $s;
                    if ($max < $s) {
                        $max = $s;
                    }
                    if ($min > $s) {
                        $min = $s;
                    }
                }
                echo '<td>' . $sum/count($score) . '</td>';
                echo '<td>' . $max . '</td>';
                echo '<td>' . $min . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Average</td>
                    <?php 
                    $sum1 = 0;
                    $sum2 = 0;
                    $sum3 = 0;
                    $sum4 = 0;
                    $sum5 = 0;
                    foreach ($students as $student => $score) {
                        $sum1 = $sum1 + $score[0];
                        $sum2 = $sum2 + $score[1];
                        $sum3 = $sum3 + $score[2];
                        $sum4 = $sum4 + $score[3];
                        $sum5 = $sum5 + $score[4];
                    }
                    ?>
                    <td><?php echo $sum1/count($students); ?></td>
                    <td><?php echo $sum2/count($students); ?></td>
                    <td><?php echo $sum3/count($students); ?></td>
                    <td><?php echo $sum4/count($students); ?></td>
                    <td><?php echo $sum5/count($students); ?></td>
            </tr>
            <!-- max -->
            <tr>
                <td>Max</td>
                <?php 
                $max1 = $students['Riku'][0];
                $max2 = $students['Riku'][1];
                $max3 = $students['Riku'][2];
                $max4 = $students['Riku'][3];
                $max5 = $students['Riku'][4];
                foreach ($students as $student => $score) {
                    if ($max1 < $score[0]) {
                        $max1 = $score[0];
                    }
                    if ($max2 < $score[1]) {
                        $max2 = $score[1];
                    }
                    if ($max3 < $score[2]) {
                        $max3 = $score[2];
                    }
                    if ($max4 < $score[3]) {
                        $max4 = $score[3];
                    }
                    if ($max5 < $score[4]) {
                        $max5 = $score[4];
                    }
                }
                ?>
                <td><?php echo $max1; ?></td>
                <td><?php echo $max2; ?></td>
                <td><?php echo $max3; ?></td>
                <td><?php echo $max4; ?></td>
                <td><?php echo $max5; ?></td>
            </tr>
            <!-- min -->
            <tr>
                <td>Min</td>
                <?php 
                $min1 = $students['Riku'][0];
                $min2 = $students['Riku'][1];
                $min3 = $students['Riku'][2];
                $min4 = $students['Riku'][3];
                $min5 = $students['Riku'][4];
                foreach ($students as $student => $score) {
                    if ($min1 > $score[0]) {
                        $min1 = $score[0];
                    }
                    if ($min2 > $score[1]) {
                        $min2 = $score[1];
                    }
                    if ($min3 > $score[2]) {
                        $min3 = $score[2];
                    }
                    if ($min4 > $score[3]) {
                        $min4 = $score[3];
                    }
                    if ($min5 > $score[4]) {
                        $min5 = $score[4];
                    }
                }
                ?>
                <td><?php echo $min1; ?></td>
                <td><?php echo $min2; ?></td>
                <td><?php echo $min3; ?></td>
                <td><?php echo $min4; ?></td>
                <td><?php echo $min5; ?></td>
            </tr>
        </tfoot>
    </table>
    <ul>
        <!-- show students name whose average is above all ave -->
        <?php
        $ave = ($sum1 + $sum2 + $sum3 + $sum4 + $sum5) / (count($students) * 5);
        echo $ave;

        foreach ($students as $student => $score) {
            $sum = 0;
            foreach ($score as $s) {
                $sum = $sum + $s;
            }
            $avg = $sum / count($score);
            if ($sum/count($score) > $ave) {
                echo "<li> $student : $avg </li>";
            }
        }
        ?>
    </ul>
</body>
</html>
