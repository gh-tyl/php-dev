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
        'Riku' => 80,
        'Lucas' => 90,
        'Tina' => 100,
        'Daniel' => 70,
        'Masa' => 60,
    ];
    ?>
    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student => $score) : ?>
                <tr>
                    <td><?php echo $student; ?></td>
                    <td><?php echo $score; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Average</td>
                <td><?php echo array_sum($students) / count($students); ?></td>
            </tr>
            <!-- max -->
            <tr>
                <td>Max</td>
                <td><?php echo max($students); ?></td>
            </tr>
            <!-- min -->
            <tr>
                <td>Min</td>
                <td><?php echo min($students); ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
