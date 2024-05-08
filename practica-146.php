<?php
/**
*@author Jose Miguel Cejas Martin
*@version 1
*/

//Comentario de una línea para devs

/*
Comentario
de varias
líneas
para devs
*/

echo "Añadida esta línea de códigos";

/**
*Suma 2 números
*Esta función recibe 2 números y devuelve la suma de estos
*@param int $param1 Primer número a sumar
*@param int $param2 Segundo número a sumar
*@return int Resultado de la suma
*/

function suma($param1, $param2){

$resultado = $param1+$param2;

return $resultado;

}

/**
*Resta 2 números
*Esta función recibe 2 números y devuelve la resta de estos
*@param int $param1 Primer número a restar
*@param int $param2 Segundo número a restar
*@return int Resultado de la resta
*/

function resta($param1, $param2){

$resultado= $param1-$param2;

return $resultado;

}