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
    $name = "Miku";
    $family = "Ogata";
    echo "<h1>Hello $name $family</h1>";
    $place_01 = "Tokyo";
    $place_02 = "Osaka";
    $place_03 = "Kyoto";
    $place_04 = "Nagoya";
    echo "<ul>
            <li>$place_01</li>
            <li>$place_02</li>
            <li>$place_03</li>
            <li>$place_04</li>
        </ul>";
    $number_01 = 20;
    $number_02 = 10;
    echo "<h3> $number_01 + $number_02 = " . ($number_01 + $number_02) . "</h3>";
    echo "<h3> $number_01 - $number_02 = " . ($number_01 - $number_02) . "</h3>";
    echo "<h3> $number_01 * $number_02 = " . ($number_01 * $number_02) . "</h3>";
    echo "<h3> $number_01 / $number_02 = " . ($number_01 / $number_02) . "</h3>";

    $grade = "";
    $score = 80;

    if($score >= 90){
        $grade = "A";
    }elseif($score >= 80){
        $grade = "B";
    }elseif($score >= 70){
        $grade = "C";
    }else{
        $grade = "F";
    }
    echo "<h3>Grade: $grade</h3>";

    ?>
</body>
</html>