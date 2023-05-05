<?php
/**
 * Este script muestra  dos funciones diferentes
 * @author Salvador Galvez del  Postigo Campos
 * @version 1.0
 * @package practica-galvezdelpostigocampos
 */
/**
 * Esta función saluda a una persona
 * @internal Se concatenan cadenas de caracteres con .
 * @param string $nombre Nombre de la persona que se saluda
 * @return string El saludo
 */
function saludar($nombre) {
  return 'Hola amigo' . $nombre;
}
/**
 * Esta función suma dos números
 * @internal Se suman dos números enteros con +
 * @param int $n1 El primer número
 * @param int $n2 El segundo número
 * @return int La suma
 */
function sumar($n1, $n2){
 return $n1+$n2;	
}


?>
