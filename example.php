<?php

use App\Search;

require_once __DIR__.'/vendor/autoload.php';

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('67030000');

print_r($resultado);