<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

while ($looping <= 5) {
    $while[] = $looping;
    $looping++;
};

var_dump($while);


$looping = 5;
$while = [];

do {
    $while[] = $looping;
    $looping--;
} while ($looping >= 1);


var_dump($while);
/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for ($i = 0; $i <= 10; $i++) {
    echo "<p>{$i}</p>";
}


/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for ($w = 1; $w <= 10; $w++) {
    if ($w % 2 == 1) {
        continue;
    }

    if($w >= 10) {
        break;
    }

    echo "<p>Pulo + 2 :: {$w}</p>";
}

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$array = [];
for ($arr = 0; $arr <= 5; $arr++) {
    $array[] = $arr;
}

var_dump($array);

foreach ($array as $item) {
    var_dump($item);
}

foreach ($array as $key => $value) {
    var_dump("{$key} = {$value}");
}