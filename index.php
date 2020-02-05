<?php

include_once 'cliente.php';
include_once 'operaio.php';
include_once 'prodotto.php';

$cliente = new Cliente('Pippo', 'Rossi', 'Roma', 'Bonifico', 'pippo@gmail.com');

$operaio = new Operaio('Pluto', 'Rossi', '1342563', 'Addetto vendita');

$prodotto = new Prodotto('A1', '2', 'robot', '2ry73e', 'true', '125.00' );

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<pre>";
var_dump($operaio);
echo "</pre>";

echo "<pre>";
var_dump($prodotto);
echo "</pre>";

?>
