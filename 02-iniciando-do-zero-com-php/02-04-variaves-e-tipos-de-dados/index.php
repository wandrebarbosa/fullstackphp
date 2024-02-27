<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$firstName = "Wandreson";
$lastName = "Nascimento";

echo "<h3>{$firstName} {$lastName}</h3>";

$userAge = 31;
echo "<p>{$firstName} {$lastName} <span class='tag'> tem {$userAge} anos de idade</span></p>";

//Declaração de variavel deve sempre vir antes da execução
$userEmail = "wandresonbarbosa@gmail.com";
echo $userEmail;


//Passando valor de variavel por referencia
$calcA = 10;
$calcB = 50;
echo "<h3>{$calcA}, {$calcB}</h3>";
$calcB = &$calcA;
$calcB = 40;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$bestAge = ($userAge > 50);

var_dump($bestAge);

//valores que no php é entendido como false:
$a = 0;
$b = 0.0;
$c = "";
$d = []; //ou array()
$e = null;

if ($a || $b || $c || $d || $e) {
    var_dump(true);
}else {
    var_dump(false);
}


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code); //func php que limpa tags.

var_dump($code, $codeClear);

//função de call back
$codeMore = function($code) {
    echo "<h2>{$code}</h2>";
};

$codeMore("BoraProgramar");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 12332;
$float = 1.5624;


var_dump([
    $string,
    $array ,
    $object,
    $object,
    $null,
    $int,
    $float
]);
