<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use iraecio\AbstractFactory\FabricaCompanhia;
use iraecio\AbstractFactory\FabricaGuarda;

$modelo = new FabricaCompanhia();
$modelos = new FabricaGuarda();

var_dump($modelo->getCachorro());
var_dump($modelos->getGato());
