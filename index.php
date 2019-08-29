<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

/**
 * Abstract Factory
 */
use iraecio\AbstractFactory\FabricaCompanhia;
use iraecio\AbstractFactory\FabricaGuarda;

$modelo = new FabricaCompanhia();
$modelos = new FabricaGuarda();
echo "<br><br>";
echo "<hr><br>";
echo "Cachorros para companhia: " . $modelo->getCachorro() . "<br>";
echo "Gatos para companhia: " . $modelo->getGato() . "<br>";
echo "<hr><br>";
echo "Cachorros para guarda: " . $modelos->getCachorro() . "<br>";
echo "Gatos para guarda: " . $modelos->getGato() . "<br>";
echo "<hr><br>";
/** Abstract Factory */

/**
 * Builder
 * */

use iraecio\Builder\Montadora;

$montadora = new Montadora();

$carro = "" . $montadora->montar('F', "Testarossa");
$carro1 = "" . $montadora->montar('J', "Renegade");

echo "<br>";
echo $carro . "<br>";
echo $carro1 . "<br>";
echo "<br><br>";
/** Builder */