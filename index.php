<?php

// однострочный комментарий
/* многострочный
комментарий 
*/
$a = 1;
$b = "Behruz Rakhmatullaev";
$c = true;
$f = 1.1;
$arr = [];
$object = new stdClass();

for ($i = 0; $i < 100; $i+=2)
    {$arr[] = $i * 2;
    }

/*echo '<pre>';
print_r ($arr);
echo '<pre>';*/

// $key % 2 == 0

foreach ($arr as $key => $value) {
    echo 'key' . $key . '] = value[' . $value . ']<br/>';
    if ($key == 10)
        {
            break;
        }
}

echo ("swith case example");

$a = 10;
switch ($a) {
    case $a < 2:
        # code...
        break;
    case $a < 10:
    
    case 10:
        echo 'a is' . $a;
        break;
    default:
    echo 'default case';
    break;
}