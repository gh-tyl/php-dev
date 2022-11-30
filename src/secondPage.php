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
    $places = array('Paris', 'London', 'New York', 'Tokyo', 'Hong Kong');
    // add a new item to the array
    $places[] = 'Dubai';
    // loop through the array in ul
    echo '<ul>';
    foreach($places as $place) {
        echo '<li>' . $place . '</li>';
    }
    echo '</ul>';
    
    // delete an item from the array
    array_pop($places);
    echo '<ul>';
    for ($i = 0; $i < count($places); $i++) {
        echo '<li>' . $places[$i] . '</li>';
    }
    echo '</ul>';

    echo '<ol>';
    for ($i = 0; $i < 3; $i++) {
        echo '<li>' . $places[array_rand($places)] . '</li>';
    }
    echo '</ol>';
    ?>
</body>
</html>