<?php
function doble($i) {
 return $i*2; // '*' operador de multiplicación
}
$a = TRUE; // booleano
$b = "xyz"; // string
$c = 'xyz'; // string
$d = 12; // int
echo gettype($a); // función que muestra el tipo de dato de la variable
echo gettype($b); // función que muestra el tipo de dato de la variable
echo gettype($c); // función que muestra el tipo de dato de la variable
echo gettype($d); // función que muestra el tipo de dato de la variable
if (is_int($d)) { // estructura de condición
 $d += 4; // suma 4 al valor de $d proveído
}
if (is_string($a)) {
 echo "Cadena: $a"; // verifica que la var sea string y luego imprime
}
$d = $a ? ++$d : $d*3; // controla que a sea TRUE, si es así
// suma un valor a $d y sino multiplica $d por 3
$f = doble($d++); // llama a la función para que le asige a $f el doble de $d
$g = $f += 10; // declara g y la hace valer 10 más que f
echo $a, $b, $c, $d, $f , $g; 
// muestra el valor de todas las variables declaradas