<?php 
$marks = array();
$array_num = 8;
for ($i=0; $i<$array_num; $i++) {
    $marks[] = rand(0, 100);
}
print_r($marks);
echo '</br>';

$max = $marks[0];
$min = $marks[0];

foreach ($marks as $mark) {
    if ($mark > $max) {
        $max = $mark;
    }
    if ($mark < $min) {
        $min = $mark;
    }
}
echo 'Max: ' . $max . ' Min: ' . $min;
echo '</br>';

$friends = array('Riku', 'Lucas', 'Tina', 'Daniel', 'Masa');
$new_friends = array('Bella', 'Honey', 'Nao');
$friends_num = count($friends);

$friends = array_merge(
    array_splice($friends, 0, $friends_num/2),
    $new_friends, 
    $friends
);
print_r($friends);
echo '</br>';

$new_friend = 'You';
$friends_num = 0;
foreach($friends as $key => $friend) {
    $friends_num++;
};

for ($i = 0; $i < $friends_num; $i++) {
    $last_idx = $friends_num - $i;
    $friends[$last_idx] = $friends[$last_idx - 1];
}

$friends[0] = $new_friend;
print_r($friends);
echo '</br>';

$new_friend = 'He';
for ($i = $friends_num; $i >= 0; $i--) {
    $friends[$i+1] = $friends[$i];
}
$friends[0] = $new_friend;
print_r($friends);
echo '</br>';

$new_friends = ['Bella', 'Honey', 'Nao'];
for ($i = $friends_num+count($new_friends); $i >= count($new_friends); $i--) {
    $friends[$i] = $friends[$i-count($new_friends)];
}
foreach ($new_friends as $key => $new_friend) {
    $friends[$key] = $new_friend;
}
print_r($friends);
echo '</br>';

?>