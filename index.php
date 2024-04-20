<?php
//Desarrollar un sitio web, que reciba por GET, dos variables, numero1 y numero2, y que devuelva el siguiente mensaje:
//"La suma del número [numero1] y del número [numero2] es igual a [la suma de numero1 y el numero2]"

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$resultado = $n1+$n2;


echo 'La suma del número '.$n1.' y del número '.$n2.' es igual a '.$resultado;


